angular.module('app.main', [])
  // initiate body
  .directive('body', function() {
    return {
      restrict: 'E',
      link: function(scope, element, attrs) {
        element.on('click', 'a[href="#"], [data-toggle]', function(e) {
          e.preventDefault();
        })
      }
    }
  })

  .factory('ribbon', ['$rootScope', function($rootScope) {
    var ribbon = {
      currentBreadcrumb: [],
      updateBreadcrumb: function(crumbs) {
        crumbs.push('Home');
        var breadCrumb = crumbs.reverse();
        console.log('breadCrumb: ' + breadCrumb);
        ribbon.currentBreadcrumb = breadCrumb;
        $rootScope.$broadcast('navItemSelected', breadCrumb);
      }
    };

    return ribbon;
  }])

  .directive('action', function() {
    return {
      restrict: 'A',
      link: function(scope, element, attrs) {
        /*
         * SMART ACTIONS
         */
        var smartActions = {
      
            // LOGOUT MSG 
            userLogout: function($this){
        
            // ask verification
            $.SmartMessageBox({
              title : "<i class='fa fa-sign-out txt-color-orangeDark'></i> Logout <span class='txt-color-orangeDark'><strong>" + $('#show-shortcut').text() + "</strong></span> ?",
              content : $this.data('logout-msg') || "You can improve your security further after logging out by closing this opened browser",
              buttons : '[No][Yes]'
        
            }, function(ButtonPressed) {
              if (ButtonPressed == "Yes") {
                $.root_.addClass('animated fadeOutUp');
                setTimeout(logout, 1000);
              }
            });
            function logout() {
              window.location = $this.attr('href');
            }
        
          },

          // RESET WIDGETS
            resetWidgets: function($this){
            $.widresetMSG = $this.data('reset-msg');
            
            $.SmartMessageBox({
              title : "<i class='fa fa-refresh' style='color:green'></i> Clear Local Storage",
              content : $.widresetMSG || "Would you like to RESET all your saved widgets and clear LocalStorage?",
              buttons : '[No][Yes]'
            }, function(ButtonPressed) {
              if (ButtonPressed == "Yes" && localStorage) {
                localStorage.clear();
                location.reload();
              }
        
            });
            },
            
            // LAUNCH FULLSCREEN 
            launchFullscreen: function(element){
        
            if (!$.root_.hasClass("full-screen")) {
          
              $.root_.addClass("full-screen");
          
              if (element.requestFullscreen) {
                element.requestFullscreen();
              } else if (element.mozRequestFullScreen) {
                element.mozRequestFullScreen();
              } else if (element.webkitRequestFullscreen) {
                element.webkitRequestFullscreen();
              } else if (element.msRequestFullscreen) {
                element.msRequestFullscreen();
              }
          
            } else {
              
              $.root_.removeClass("full-screen");
              
              if (document.exitFullscreen) {
                document.exitFullscreen();
              } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
              } else if (document.webkitExitFullscreen) {
                document.webkitExitFullscreen();
              }
          
            }
        
           },
        
           // MINIFY MENU
            minifyMenu: function($this){
              if (!$.root_.hasClass("menu-on-top")){
              $.root_.toggleClass("minified");
              $.root_.removeClass("hidden-menu");
              $('html').removeClass("hidden-menu-mobile-lock");
              $this.effect("highlight", {}, 500);
            }
            },
            
            // TOGGLE MENU 
            toggleMenu: function(){
              if (!$.root_.hasClass("menu-on-top")){
              $('html').toggleClass("hidden-menu-mobile-lock");
              $.root_.toggleClass("hidden-menu");
              $.root_.removeClass("minified");
              } else if ( $.root_.hasClass("menu-on-top") && $.root_.hasClass("mobile-view-activated") ) {
                $('html').toggleClass("hidden-menu-mobile-lock");
              $.root_.toggleClass("hidden-menu");
              $.root_.removeClass("minified");
              }
            },     
        
            // TOGGLE SHORTCUT 
            toggleShortcut: function(){
              
            if ($.shortcut_dropdown.is(":visible")) {
              shortcut_buttons_hide();
            } else {
              shortcut_buttons_show();
            }

            // SHORT CUT (buttons that appear when clicked on user name)
            $.shortcut_dropdown.find('a').click(function(e) {
              e.preventDefault();
              window.location = $(this).attr('href');
              setTimeout(shortcut_buttons_hide, 300);
          
            });
          
            // SHORTCUT buttons goes away if mouse is clicked outside of the area
            $(document).mouseup(function(e) {
              if (!$.shortcut_dropdown.is(e.target) && $.shortcut_dropdown.has(e.target).length === 0) {
                shortcut_buttons_hide();
              }
            });
            
            // SHORTCUT ANIMATE HIDE
            function shortcut_buttons_hide() {
              $.shortcut_dropdown.animate({
                height : "hide"
              }, 300, "easeOutCirc");
              $.root_.removeClass('shortcut-on');
          
            }
          
            // SHORTCUT ANIMATE SHOW
            function shortcut_buttons_show() {
              $.shortcut_dropdown.animate({
                height : "show"
              }, 200, "easeOutCirc");
              $.root_.addClass('shortcut-on');
            }
        
            }  
           
        };
        
        var actionEvents = {
          userLogout: function(e) {
            smartActions.userLogout(element);
          },
          resetWidgets: function(e) {
            smartActions.resetWidgets(element);
          },
          launchFullscreen: function(e) {
            smartActions.launchFullscreen(document.documentElement);
          },
          minifyMenu: function(e) {
            smartActions.minifyMenu(element);
          },
          toggleMenu: function(e) {
            smartActions.toggleMenu();
          },
          toggleShortcut: function(e) {
            smartActions.toggleShortcut();
          }
        };

        if (angular.isDefined(attrs.action) && attrs.action != '') {
          var actionEvent = actionEvents[attrs.action];
          if (typeof actionEvent === 'function') {
            element.on('click', function(e) {
              actionEvent(e);
              e.preventDefault();
            });
          }
        }

      }
    };
  })

  .directive('header', function() {
    return {
      restrict: 'EA',
      link: function(scope, element, attrs) {
        // SHOW & HIDE MOBILE SEARCH FIELD
        angular.element('#search-mobile').click(function() {
          $.root_.addClass('search-mobile');
        });

        angular.element('#cancel-search-js').click(function() {
          $.root_.removeClass('search-mobile');
        });
      }
    };
  })

  .directive('ribbon', function() {
    return {
      restrict: 'A',
      link: function(scope, element, attrs) {
        // hide bg options
        var smartbgimage = "<h6 class='margin-top-10 semi-bold'>Background</h6><img src='img/pattern/graphy-xs.png' data-htmlbg-url='img/pattern/graphy.png' width='22' height='22' class='margin-right-5 bordered cursor-pointer'><img src='img/pattern/tileable_wood_texture-xs.png' width='22' height='22' data-htmlbg-url='img/pattern/tileable_wood_texture.png' class='margin-right-5 bordered cursor-pointer'><img src='img/pattern/sneaker_mesh_fabric-xs.png' width='22' height='22' data-htmlbg-url='img/pattern/sneaker_mesh_fabric.png' class='margin-right-5 bordered cursor-pointer'><img src='img/pattern/nistri-xs.png' data-htmlbg-url='img/pattern/nistri.png' width='22' height='22' class='margin-right-5 bordered cursor-pointer'><img src='img/pattern/paper-xs.png' data-htmlbg-url='img/pattern/paper.png' width='22' height='22' class='bordered cursor-pointer'>";
        $("#smart-bgimages")
            .fadeOut();

        $('#demo-setting')
            .click(function () {
                //console.log('setting');
                $('#ribbon .demo')
                    .toggleClass('activate');
            })
        

        /*
         * REFRESH WIDGET
         */
        $("#reset-smart-widget")
            .bind("click", function () {
                $('#refresh')
                    .click();
                return false;
            });

        /*
         * STYLES
         */
        $("#smart-styles > a")
           .on('click', function() {
                var $this = $(this);
                var $logo = $("#logo img");
                $.root_.removeClassPrefix('smart-style')
                    .addClass($this.attr("id"));
                $logo.attr('src', $this.data("skinlogo"));
                $("#smart-styles > a #skin-checked")
                    .remove();
                $this.prepend("<i class='fa fa-check fa-fw' id='skin-checked'></i>");
            });
      }
    };
  })

  .controller('breadcrumbController', ['$rootScope', function($rootScope) {
    $rootScope.breadcrumbs = [];
    $rootScope.$on('navItemSelected', function(name, crumbs) {
      $rootScope.setBreadcrumb(crumbs);
    });

    $rootScope.setBreadcrumb = function(crumbs) {
      $rootScope.breadcrumbs = crumbs;
    }
  }])

  .directive('breadcrumb', ['ribbon', 'localize', '$compile', function(ribbon, localize, $compile) {
    return {
      restrict: 'AE',
      controller: 'breadcrumbController',
      replace: true,
      link: function(rootScope, element, attrs) {
        rootScope.$watch('breadcrumbs', function(newVal, oldVal) {
          if (newVal !== oldVal) {
            // update DOM
            rootScope.updateDOM();
          }
        })
        rootScope.updateDOM = function() {
          element.empty();
          angular.forEach(rootScope.breadcrumbs, function(crumb) {
            var li = angular.element('<li data-localize="' + crumb + '">' + crumb + '</li>');
            li.text(localize.localizeText(crumb));
            
            $compile(li)(rootScope);
            element.append(li);
          });
        };
        
        // set the current breadcrumb on load
        rootScope.setBreadcrumb(ribbon.currentBreadcrumb);
        rootScope.updateDOM();
      },
      template: '<ol class="breadcrumb"></ol>'
    }
  }])
;

//NAVIGATION Module
angular.module('app.navigation', [])
  .directive('navigation', function() {
    return {
      restrict: 'AE',
      controller: ['$scope', function($scope) {

      }],
      transclude: true,
      replace: true,
      link: function(scope, element, attrs) {
        if (!$topmenu) {
          if (!null) {
            element.first().worthmenu({
              accordion : true,
              speed : $.menu_speed,
              closedSign : '<em class="fa fa-plus-square-o"></em>',
              openedSign : '<em class="fa fa-minus-square-o"></em>'
            });
          } else {
            alert("Error - menu anchor does not exist");
          }
        }

        // SLIMSCROLL FOR NAV
        if ($.fn.slimScroll) {
          element.slimScroll({
                height: '100%'
            });
        }

        scope.getElement = function() {
          return element;
        }
      },
      template: '<nav><ul data-ng-transclude=""></ul></nav>'
    };
  })

  .controller('NavGroupController', ['$scope', function($scope) {
    $scope.active = false;
    $scope.hasIcon = angular.isDefined($scope.icon);
      $scope.hasIconCaption = angular.isDefined($scope.iconCaption);

      this.setActive = function(active) {
        $scope.active = active;
      }

  }])
  .directive('navGroup', function() {
    return {
      restrict: 'AE',
      controller: 'NavGroupController',
      transclude: true,
      replace: true,
      scope: {
        icon: '@',
        title: '@',
        iconCaption: '@',
        active: '=?'
      },
      template: '\
        <li data-ng-class="{active: active}">\
          <a href="">\
            <i data-ng-if="hasIcon" class="{{ icon }}"><em data-ng-if="hasIconCaption"> {{ iconCaption }} </em></i>\
            <span class="menu-item-parent" data-localize="{{ title }}">{{ title }}</span>\
          </a>\
          <ul data-ng-transclude=""></ul>\
        </li>',

    };
  })

  .controller('NavItemController', ['$rootScope', '$scope', '$location', function($rootScope, $scope, $location) {
    $scope.isChild = false;
    $scope.active = false;
    $scope.isActive = function (viewLocation) {
          $scope.active = viewLocation === $location.path();
          return $scope.active;
      };

      $scope.hasIcon = angular.isDefined($scope.icon);
      $scope.hasIconCaption = angular.isDefined($scope.iconCaption);

      $scope.getItemUrl = function(view) {
        if (angular.isDefined($scope.href)) return $scope.href;
        if (!angular.isDefined(view)) return '';
        return '#' + view;
      };

      $scope.getItemTarget = function() {
        return angular.isDefined($scope.target) ? $scope.target : '_self';
      };

  }])
  .directive('navItem', ['ribbon', '$window', function(ribbon, $window) {
    return {
      require: ['^navigation', '^?navGroup'],
      restrict: 'AE',
      controller: 'NavItemController',
      scope: {
        title: '@',
        view: '@',
        icon: '@',
        iconCaption: '@',
        href: '@',
        target: '@'
      },
      link: function(scope, element, attrs, parentCtrls) {
        var navCtrl = parentCtrls[0],
          navgroupCtrl = parentCtrls[1]

        scope.$watch('active', function(newVal, oldVal) {
          if (newVal) {
            if (angular.isDefined(navgroupCtrl)) navgroupCtrl.setActive(true);
            $window.document.title = scope.title;
            scope.setBreadcrumb();
          } else {
            if (angular.isDefined(navgroupCtrl)) navgroupCtrl.setActive(false);
          }
        });

        scope.openParents = scope.isActive(scope.view);
        scope.isChild = angular.isDefined(navgroupCtrl);
        
        scope.setBreadcrumb = function() {
            var crumbs = [];
            crumbs.push(scope.title);
            // get parent menus
          var test = element.parents('nav li').each(function() {
            var el = angular.element(this);
            var parent = el.find('.menu-item-parent:eq(0)');
            crumbs.push(parent.data('localize').trim());
            if (scope.openParents) {
              // open menu on first load
              parent.trigger('click');
            }
          });
          // this should be only fired upon first load so let's set this to false now
          scope.openParents = false;
          ribbon.updateBreadcrumb(crumbs);
          };

          element.on('click', 'a[href!="#"]', function() {
            if ($.root_.hasClass('mobile-view-activated')) {
              $.root_.removeClass('hidden-menu');
            }
          });
        
      },
      transclude: true,
      replace: true,
      template: '\
        <li data-ng-class="{active: isActive(view)}">\
          <a href="{{ getItemUrl(view) }}" target="{{ getItemTarget() }}" title="{{ title }}">\
            <i data-ng-if="hasIcon" class="{{ icon }}"><em data-ng-if="hasIconCaption"> {{ iconCaption }} </em></i>\
            <span ng-class="{\'menu-item-parent\': !isChild}" data-localize="{{ title }}"> {{ title }} </span>\
            <span data-ng-transclude=""></span>\
          </a>\
        </li>'
    };
  }])
;

// directives for localization
angular.module('app.localize', [])

  .factory('localize', ['$http', '$rootScope', '$window', function($http, $rootScope, $window){
    var localize = {
      currentLocaleData: {},
      currentLang: {},
      setLang: function(lang) {
        $http({method: 'GET', url: localize.getLangUrl(lang), cache: false})
        .success(function(data) {
          localize.currentLocaleData = data;
          localize.currentLang = lang;
          $rootScope.$broadcast('localizeLanguageChanged');
        }).error(function(data) {
          console.log('Error updating language!');
        })
      },
      getLangUrl: function(lang) {
        return 'assets/js/langs/' + lang.langCode + '.js';
      },

      localizeText: function(sourceText) {
        return localize.currentLocaleData[sourceText];
      }
    };

    return localize;
  }])

  .directive('localize', ['localize', function(localize) {
    return {
      restrict: 'A',
      scope: {
        sourceText: '@localize'
      },
      link: function(scope, element, attrs) {
        scope.$on('localizeLanguageChanged', function() {
          var localizedText = localize.localizeText(scope.sourceText);
          if (element.is('input, textarea')) element.attr('placeholder', localizedText)
          else element.text(localizedText);
        });
      }
    }
  }])
;