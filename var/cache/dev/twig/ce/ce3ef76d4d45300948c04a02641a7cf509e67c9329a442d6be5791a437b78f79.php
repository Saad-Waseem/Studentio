<?php

/* WebProfilerBundle:Collector:form.html.twig */
class __TwigTemplate_eba499809fa7ec0e66fc6850db391dcb17055accc1ceb91b1527495b15041606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:form.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'head' => array($this, 'block_head'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["__internal_5649835dfe269142ae40c112988a83806b905cc70ccc8317d651345b73c30863"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array()) > 0) || twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "forms", array())))) {
            // line 7
            echo "        ";
            $context["status_color"] = (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array())) ? ("red") : (""));
            // line 8
            echo "        ";
            ob_start();
            // line 9
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/form.svg");
            echo "
            <span class=\"sf-toolbar-value\">
                ";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array())) ? ($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array())) : (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "forms", array())))), "html", null, true);
            echo "
            </span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 14
            echo "
        ";
            // line 15
            ob_start();
            // line 16
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Number of forms</b>
                <span class=\"sf-toolbar-status\">";
            // line 18
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "forms", array())), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Number of errors</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 22
            echo ((($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array()) > 0)) ? ("red") : (""));
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 25
            echo "
        ";
            // line 26
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null), "status" => (isset($context["status_color"]) ? $context["status_color"] : null)));
            echo "
    ";
        }
    }

    // line 30
    public function block_menu($context, array $blocks = array())
    {
        // line 31
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array())) ? ("error") : (""));
        echo " ";
        echo ((twig_test_empty($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "forms", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 32
        echo twig_include($this->env, $context, "@WebProfiler/Icon/form.svg");
        echo "</span>
        <strong>Forms</strong>
        ";
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array()) > 0)) {
            // line 35
            echo "            <span class=\"count\">
                <span>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "nb_errors", array()), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 39
        echo "    </span>
";
    }

    // line 42
    public function block_head($context, array $blocks = array())
    {
        // line 43
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "

    <style>
        #tree-menu {
            float: left;
            padding-right: 10px;
            width: 230px;
        }
        #tree-menu ul {
            list-style: none;
            margin: 0;
            padding-left: 0;
        }
        #tree-menu li {
            margin: 0;
            padding: 0;
            width: 100%;
        }
        #tree-menu .empty {
            border: 0;
            mmargin: 0;
            padding: 0;
        }
        #tree-details-container {
            border-left: 1px solid #DDD;
            margin-left: 250px;
            padding-left: 20px;
        }
        .tree-details {
            padding-bottom: 40px;
        }
        .tree-details h3 {
            font-size: 18px;
            position: relative;
        }

        .toggle-icon {
            display: inline-block;
            background: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDgwx4LcKwAAAABVQTFRFAAAA////////////////ZmZm////bvjBwAAAAAV0Uk5TABZwsuCVEUjgAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgTQgQGWgA7h2uIFwK+CWwp1BpHvYEqDuATEYkBlY3IOmBq6dCPcAAIT5Eg2IksjQAAAAAElFTkSuQmCC\") no-repeat top left #5eb5e0;
        }
        .closed .toggle-icon, .closed.toggle-icon {
            background-position: bottom left;
        }
        .toggle-icon.empty {
            background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAZgBmAGYHukptAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhIf6CA40AAAAFRJREFUOMvtk7ENACEMA61vfx767MROWfO+AdGBHlNyTZrYUZRYDBII4NWE1pNdpFarfgLUbpDaBEgBYRiEVjsvDLa1l6O4Z3wkFWN+OfLKdpisOH/TlICzukmUJwAAAABJRU5ErkJggg==\");
        }

        .tree .tree-inner {
            cursor: pointer;
            padding: 5px 7px 5px 22px;
            position: relative;

        }
        .tree .toggle-button {
            /* provide a bigger clickable area than just 10x10px */
            width: 16px;
            height: 16px;
            margin-left: -18px;
        }
        .tree .toggle-icon {
            width: 10px;
            height: 10px;
            /* position the icon in the center of the clickable area */
            margin-left: 3px;
            margin-top: 3px;
            background-size: 10px 20px;
            background-color: #AAA;
        }
        .tree .toggle-icon.empty {
            width: 10px;
            height: 10px;
            position: absolute;
            top: 50%;
            margin-top: -5px;
            margin-left: -15px;
            background-size: 10px 10px;
        }
        .tree ul ul .tree-inner {
            padding-left: 37px;
        }
        .tree ul ul ul .tree-inner {
            padding-left: 52px;
        }
        .tree ul ul ul ul .tree-inner {
            padding-left: 67px;
        }
        .tree ul ul ul ul ul .tree-inner {
            padding-left: 82px;
        }
        .tree .tree-inner:hover {
            background: #dfdfdf;
        }
        .tree .tree-inner.active, .tree .tree-inner.active:hover {
            background: #E0E0E0;
            font-weight: bold;
        }
        .tree .tree-inner.active .toggle-icon, .tree .tree-inner:hover .toggle-icon, .tree .tree-inner.active:hover .toggle-icon {
            background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhEYXWn+sAAAABhQTFRFAAAA39/f39/f39/f39/fZmZm39/f////gc3YPwAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgXIgQGWgA7h2uIFwK+CWwp1BpHvYC6DuATEYkBlY3IOmBq6dCPcAADqLE4MnBi/fAAAAAElFTkSuQmCC\");
            background-color: #999;
        }
        .tree .tree-inner.active .toggle-icon.empty, .tree .tree-inner:hover .toggle-icon.empty, .tree .tree-inner.active:hover .toggle-icon.empty {
            background-image: url(\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhoucSey4gAAABVQTFRFAAAA39/f39/f39/f39/fZmZm39/fD5Dx2AAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAADJJREFUCNdjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBnIA3DtcAPhVsAthTkDAFOfBKW9C1iqAAAAAElFTkSuQmCC\");
        }
        .tree-details .toggle-icon {
            width: 16px;
            height: 16px;
            /* vertically center the button */
            position: absolute;
            top: 50%;
            margin-top: -9px;
            margin-left: 6px;
        }
        .form-type {
            color: #999;
        }
        .badge-error {
            float: right;
            background: #B0413E;
            color: #FFF;
            padding: 1px 4px;
            font-size: 10px;
            font-weight: bold;
            vertical-align: middle;
        }
        .errors h3 {
            color: #B0413E;
        }
        .errors th {
            background: #B0413E;
            color: #FFF;
        }
        .errors .toggle-icon {
            background-color: #B0413E;
        }
        h3 a, h3 a:hover, h3 a:focus {
            color: inherit;
            text-decoration: inherit;
        }
    </style>
";
    }

    // line 184
    public function block_panel($context, array $blocks = array())
    {
        // line 185
        echo "    <h2>Forms</h2>

    ";
        // line 187
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "forms", array()))) {
            // line 188
            echo "        <div id=\"tree-menu\" class=\"tree\">
            <ul>
            ";
            // line 190
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "forms", array()));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 191
                echo "                ";
                echo $context["__internal_5649835dfe269142ae40c112988a83806b905cc70ccc8317d651345b73c30863"]->getform_tree_entry($context["formName"], $context["formData"], true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 193
            echo "            </ul>
        </div>

        <div id=\"tree-details-container\">
            ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "forms", array()));
            foreach ($context['_seq'] as $context["formName"] => $context["formData"]) {
                // line 198
                echo "                ";
                echo $context["__internal_5649835dfe269142ae40c112988a83806b905cc70ccc8317d651345b73c30863"]->getform_tree_details($context["formName"], $context["formData"], $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "data", array()), "forms_by_hash", array()));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['formName'], $context['formData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            echo "        </div>
    ";
        } else {
            // line 202
            echo "        <div class=\"empty\">
            <p>No forms were submitted for this request.</p>
        </div>
    ";
        }
        // line 206
        echo "
    <script>
    function Toggler(storage) {
        \"use strict\";

        var STORAGE_KEY = 'sf_toggle_data',

            states = {},

            isCollapsed = function (button) {
                return Sfjs.hasClass(button, 'closed');
            },

            isExpanded = function (button) {
                return !isCollapsed(button);
            },

            expand = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isCollapsed(button)) {
                    Sfjs.removeClass(button, 'closed');
                    Sfjs.removeClass(target, 'hidden');

                    states[targetId] = 1;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            collapse = function (button) {
                var targetId = button.dataset.toggleTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Toggle target \" + targetId + \" does not exist\";
                }

                if (isExpanded(button)) {
                    Sfjs.addClass(button, 'closed');
                    Sfjs.addClass(target, 'hidden');

                    states[targetId] = 0;
                    storage.setItem(STORAGE_KEY, states);
                }
            },

            toggle = function (button) {
                if (Sfjs.hasClass(button, 'closed')) {
                    expand(button);
                } else {
                    collapse(button);
                }
            },

            initButtons = function (buttons) {
                states = storage.getItem(STORAGE_KEY, {});

                // must be an object, not an array or anything else
                // `typeof` returns \"object\" also for arrays, so the following
                // check must be done
                // see http://stackoverflow.com/questions/4775722/check-if-object-is-array
                if ('[object Object]' !== Object.prototype.toString.call(states)) {
                    states = {};
                }

                for (var i = 0, l = buttons.length; i < l; ++i) {
                    var targetId = buttons[i].dataset.toggleTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Toggle target \" + targetId + \" does not exist\";
                    }

                    // correct the initial state of the button
                    if (Sfjs.hasClass(target, 'hidden')) {
                        Sfjs.addClass(buttons[i], 'closed');
                    }

                    // attach listener for expanding/collapsing the target
                    clickHandler(buttons[i], toggle);

                    if (states.hasOwnProperty(targetId)) {
                        // open or collapse based on stored data
                        if (0 === states[targetId]) {
                            collapse(buttons[i]);
                        } else {
                            expand(buttons[i]);
                        }
                    }
                }
            };

        return {
            initButtons: initButtons,

            toggle: toggle,

            isExpanded: isExpanded,

            isCollapsed: isCollapsed,

            expand: expand,

            collapse: collapse
        };
    }

    function JsonStorage(storage) {
        var setItem = function (key, data) {
                storage.setItem(key, JSON.stringify(data));
            },

            getItem = function (key, defaultValue) {
                var data = storage.getItem(key);

                if (null !== data) {
                    try {
                        return JSON.parse(data);
                    } catch(e) {
                    }
                }

                return defaultValue;
            };

        return {
            setItem: setItem,

            getItem: getItem
        };
    }

    function TabView() {
        \"use strict\";

        var activeTab = null,

            activeTarget = null,

            select = function (tab) {
                var targetId = tab.dataset.tabTargetId,
                    target = document.getElementById(targetId);

                if (!target) {
                    throw \"Tab target \" + targetId + \" does not exist\";
                }

                if (activeTab) {
                    Sfjs.removeClass(activeTab, 'active');
                }

                if (activeTarget) {
                    Sfjs.addClass(activeTarget, 'hidden');
                }

                Sfjs.addClass(tab, 'active');
                Sfjs.removeClass(target, 'hidden');

                activeTab = tab;
                activeTarget = target;
            },

            initTabs = function (tabs) {
                for (var i = 0, l = tabs.length; i < l; ++i) {
                    var targetId = tabs[i].dataset.tabTargetId,
                        target = document.getElementById(targetId);

                    if (!target) {
                        throw \"Tab target \" + targetId + \" does not exist\";
                    }

                    clickHandler(tabs[i], select);

                    Sfjs.addClass(target, 'hidden');
                }

                if (tabs.length > 0) {
                    select(tabs[0]);
                }
            };

        return {
            initTabs: initTabs,

            select: select
        };
    }

    var tabTarget = new TabView(),
        toggler = new Toggler(new JsonStorage(sessionStorage)),
        clickHandler = function (element, callback) {
            Sfjs.addEventListener(element, 'click', function (e) {
                if (!e) {
                    e = window.event;
                }

                callback(this);

                if (e.preventDefault) {
                    e.preventDefault();
                } else {
                    e.returnValue = false;
                }

                e.stopPropagation();

                return false;
            });
        };

    tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));
    toggler.initButtons(document.querySelectorAll('a.toggle-button'));
    </script>
";
    }

    // line 426
    public function getform_tree_entry($__name__ = null, $__data__ = null, $__expanded__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "expanded" => $__expanded__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 427
            echo "    ";
            $context["tree"] = $this;
            // line 428
            echo "    <li>
        <div class=\"tree-inner\" data-tab-target-id=\"";
            // line 429
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
            echo "-details\">
            ";
            // line 430
            if ( !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "children", array()))) {
                // line 431
                echo "                <a class=\"toggle-button\" data-toggle-target-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-children\" href=\"#\"><span class=\"toggle-icon\"></span></a>
            ";
            } else {
                // line 433
                echo "                <div class=\"toggle-icon empty\"></div>
            ";
            }
            // line 435
            echo "
            ";
            // line 436
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter((isset($context["name"]) ? $context["name"] : null), "(no name)")) : ("(no name)")), "html", null, true);
            echo " ";
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_class", array(), "any", true, true)) {
                echo "[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_class", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_last($this->env, twig_split_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_class", array()), "\\")), "html", null, true);
                echo "</abbr>]";
            }
            // line 437
            echo "
            ";
            // line 438
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array())) > 0))) {
                // line 439
                echo "                <div class=\"badge-error\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array())), "html", null, true);
                echo "</div>
            ";
            }
            // line 441
            echo "        </div>

        ";
            // line 443
            if ( !twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "children", array()))) {
                // line 444
                echo "            <ul id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-children\" ";
                if ( !(isset($context["expanded"]) ? $context["expanded"] : null)) {
                    echo "class=\"hidden\"";
                }
                echo ">
                ";
                // line 445
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "children", array()));
                foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                    // line 446
                    echo "                    ";
                    echo $context["tree"]->getform_tree_entry($context["childName"], $context["childData"], false);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 448
                echo "            </ul>
        ";
            }
            // line 450
            echo "    </li>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 453
    public function getform_tree_details($__name__ = null, $__data__ = null, $__forms_by_hash__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "data" => $__data__,
            "forms_by_hash" => $__forms_by_hash__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 454
            echo "    ";
            $context["tree"] = $this;
            // line 455
            echo "    <div class=\"tree-details\" ";
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array(), "any", true, true)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-details\"";
            }
            echo ">
        <h2>
            ";
            // line 457
            echo twig_escape_filter($this->env, ((array_key_exists("name", $context)) ? (_twig_default_filter((isset($context["name"]) ? $context["name"] : null), "(no name)")) : ("(no name)")), "html", null, true);
            echo "
            ";
            // line 458
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_class", array(), "any", true, true) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type", array(), "any", true, true))) {
                // line 459
                echo "            <span class=\"form-type\">[<abbr title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type_class", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "type", array()), "html", null, true);
                echo "</abbr>]</span>
            ";
            }
            // line 461
            echo "        </h2>

        ";
            // line 463
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array())) > 0))) {
                // line 464
                echo "        <div class=\"errors\">
            <h3>
                <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 466
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-errors\" href=\"#\">
                    Errors <span class=\"toggle-icon\"></span>
                </a>
            </h3>

            <table id=\"";
                // line 471
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-errors\">
                <thead>
                    <tr>
                        <th>Message</th>
                        <th>Origin</th>
                        <th>Cause</th>
                    </tr>
                </thead>
                <tbody>
                ";
                // line 480
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "errors", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 481
                    echo "                <tr>
                    <td>";
                    // line 482
                    echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                    echo "</td>
                    <td>
                        ";
                    // line 484
                    if (twig_test_empty($this->getAttribute($context["error"], "origin", array()))) {
                        // line 485
                        echo "                            <em>This form.</em>
                        ";
                    } elseif ( !$this->getAttribute(                    // line 486
(isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : null), $this->getAttribute($context["error"], "origin", array()), array(), "array", true, true)) {
                        // line 487
                        echo "                            <em>Unknown.</em>
                        ";
                    } else {
                        // line 489
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : null), $this->getAttribute($context["error"], "origin", array()), array(), "array"), "name", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 491
                    echo "                    </td>
                    <td>
                        ";
                    // line 493
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["error"], "trace", array()));
                    $context['_iterated'] = false;
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                        // line 494
                        echo "                            ";
                        if ( !$this->getAttribute($context["loop"], "first", array())) {
                            // line 495
                            echo "                                <span class=\"newline\">Caused by:</span>
                            ";
                        }
                        // line 497
                        echo "
                            ";
                        // line 498
                        if ($this->getAttribute($context["trace"], "root", array(), "any", true, true)) {
                            // line 499
                            echo "                                <strong class=\"newline\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "class", array()), "html", null, true);
                            echo "</strong>
                                <pre>";
                            // line 501
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "root", array()), "html", null, true);
                            // line 502
                            if ( !twig_test_empty($this->getAttribute($context["trace"], "path", array()))) {
                                // line 503
                                if ((twig_first($this->env, $this->getAttribute($context["trace"], "path", array())) != "[")) {
                                    echo ".";
                                }
                                // line 504
                                echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "path", array()), "html", null, true);
                            }
                            // line 505
                            echo " = ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "value", array()), "html", null, true);
                            // line 506
                            echo "</pre>
                            ";
                        } elseif ($this->getAttribute(                        // line 507
$context["trace"], "message", array(), "any", true, true)) {
                            // line 508
                            echo "                                <strong class=\"newline\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "class", array()), "html", null, true);
                            echo "</strong>
                                <pre>";
                            // line 509
                            echo twig_escape_filter($this->env, $this->getAttribute($context["trace"], "message", array()), "html", null, true);
                            echo "</pre>
                            ";
                        } else {
                            // line 511
                            echo "                                <pre>";
                            echo twig_escape_filter($this->env, $context["trace"], "html", null, true);
                            echo "</pre>
                            ";
                        }
                        // line 513
                        echo "                        ";
                        $context['_iterated'] = true;
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    if (!$context['_iterated']) {
                        // line 514
                        echo "                            <em>Unknown.</em>
                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 516
                    echo "                    </td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 519
                echo "                </tbody>
            </table>
        </div>
        ";
            }
            // line 523
            echo "
        ";
            // line 524
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", true, true)) {
                // line 525
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 526
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-default_data\" href=\"#\">
                Default Data <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 531
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-default_data\">
            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Property</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Model Format</th>
                        <td>
                            ";
                // line 543
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                    // line 544
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array()), "model", array()), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 546
                    echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                }
                // line 548
                echo "                        </td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                        <td>";
                // line 552
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array()), "norm", array()), "html", null, true);
                echo "</td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">View Format</th>
                        <td>
                            ";
                // line 557
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                    // line 558
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "default_data", array()), "view", array()), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 560
                    echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                }
                // line 562
                echo "                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        ";
            }
            // line 568
            echo "
        ";
            // line 569
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", true, true)) {
                // line 570
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 571
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-submitted_data\" href=\"#\">
                Submitted Data <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 576
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-submitted_data\">
        ";
                // line 577
                if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "norm", array(), "any", true, true)) {
                    // line 578
                    echo "            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Property</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">View Format</th>
                        <td>
                            ";
                    // line 589
                    if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "view", array(), "any", true, true)) {
                        // line 590
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array()), "view", array()), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 592
                        echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                    }
                    // line 594
                    echo "                        </td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Normalized Format</th>
                        <td>";
                    // line 598
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array()), "norm", array()), "html", null, true);
                    echo "</td>
                    </tr>
                    <tr>
                        <th class=\"font-normal\" scope=\"row\">Model Format</th>
                        <td>
                            ";
                    // line 603
                    if ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array(), "any", false, true), "model", array(), "any", true, true)) {
                        // line 604
                        echo "                                ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "submitted_data", array()), "model", array()), "html", null, true);
                        echo "
                            ";
                    } else {
                        // line 606
                        echo "                                <em class=\"font-normal text-muted\">same as normalized format</em>
                            ";
                    }
                    // line 608
                    echo "                        </td>
                    </tr>
                </tbody>
            </table>
        ";
                } else {
                    // line 613
                    echo "            <div class=\"empty\">
                <p>This form was not submitted.</p>
            </div>
        ";
                }
                // line 617
                echo "        </div>
        ";
            }
            // line 619
            echo "
        ";
            // line 620
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "passed_options", array(), "any", true, true)) {
                // line 621
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 622
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-passed_options\" href=\"#\">
                Passed Options <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 627
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-passed_options\">
            ";
                // line 628
                if (twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "passed_options", array()))) {
                    // line 629
                    echo "            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Option</th>
                        <th>Passed Value</th>
                        <th>Resolved Value</th>
                    </tr>
                </thead>
                <tbody>
                ";
                    // line 638
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "passed_options", array()));
                    foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                        // line 639
                        echo "                <tr>
                    <th>";
                        // line 640
                        echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                        echo "</th>
                    <td>";
                        // line 641
                        echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "</td>
                    <td>
                        ";
                        // line 643
                        if (($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "resolved_options", array()), $context["option"], array(), "array") === $context["value"])) {
                            // line 644
                            echo "                            <em class=\"font-normal text-muted\">same as passed value</em>
                        ";
                        } else {
                            // line 646
                            echo "                            ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "resolved_options", array()), $context["option"], array(), "array"), "html", null, true);
                            echo "
                        ";
                        }
                        // line 648
                        echo "                    </td>
                </tr>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 651
                    echo "                </tbody>
            </table>
            ";
                } else {
                    // line 654
                    echo "                <div class=\"empty\">
                    <p>No options where passed when constructing this form.</p>
                </div>
            ";
                }
                // line 658
                echo "        </div>
        ";
            }
            // line 660
            echo "
        ";
            // line 661
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "resolved_options", array(), "any", true, true)) {
                // line 662
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 663
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-resolved_options\" href=\"#\">
                Resolved Options <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 668
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-resolved_options\" class=\"hidden\">
            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Option</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                ";
                // line 677
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "resolved_options", array()));
                foreach ($context['_seq'] as $context["option"] => $context["value"]) {
                    // line 678
                    echo "                <tr>
                    <th scope=\"row\">";
                    // line 679
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "</th>
                    <td>";
                    // line 680
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['option'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 683
                echo "                </tbody>
            </table>
        </div>
        ";
            }
            // line 687
            echo "
        ";
            // line 688
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "view_vars", array(), "any", true, true)) {
                // line 689
                echo "        <h3>
            <a class=\"toggle-button\" data-toggle-target-id=\"";
                // line 690
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-view_vars\" href=\"#\">
                View Variables <span class=\"toggle-icon\"></span>
            </a>
        </h3>

        <div id=\"";
                // line 695
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()), "html", null, true);
                echo "-view_vars\" class=\"hidden\">
            <table>
                <thead>
                    <tr>
                        <th width=\"180\">Variable</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                ";
                // line 704
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "view_vars", array()));
                foreach ($context['_seq'] as $context["variable"] => $context["value"]) {
                    // line 705
                    echo "                <tr>
                    <th scope=\"row\">";
                    // line 706
                    echo twig_escape_filter($this->env, $context["variable"], "html", null, true);
                    echo "</th>
                    <td>";
                    // line 707
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['variable'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 710
                echo "                </tbody>
            </table>
        </div>
        ";
            }
            // line 714
            echo "    </div>

    ";
            // line 716
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "children", array()));
            foreach ($context['_seq'] as $context["childName"] => $context["childData"]) {
                // line 717
                echo "        ";
                echo $context["tree"]->getform_tree_details($context["childName"], $context["childData"], (isset($context["forms_by_hash"]) ? $context["forms_by_hash"] : null));
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['childName'], $context['childData'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1227 => 717,  1223 => 716,  1219 => 714,  1213 => 710,  1204 => 707,  1200 => 706,  1197 => 705,  1193 => 704,  1181 => 695,  1173 => 690,  1170 => 689,  1168 => 688,  1165 => 687,  1159 => 683,  1150 => 680,  1146 => 679,  1143 => 678,  1139 => 677,  1127 => 668,  1119 => 663,  1116 => 662,  1114 => 661,  1111 => 660,  1107 => 658,  1101 => 654,  1096 => 651,  1088 => 648,  1082 => 646,  1078 => 644,  1076 => 643,  1071 => 641,  1067 => 640,  1064 => 639,  1060 => 638,  1049 => 629,  1047 => 628,  1043 => 627,  1035 => 622,  1032 => 621,  1030 => 620,  1027 => 619,  1023 => 617,  1017 => 613,  1010 => 608,  1006 => 606,  1000 => 604,  998 => 603,  990 => 598,  984 => 594,  980 => 592,  974 => 590,  972 => 589,  959 => 578,  957 => 577,  953 => 576,  945 => 571,  942 => 570,  940 => 569,  937 => 568,  929 => 562,  925 => 560,  919 => 558,  917 => 557,  909 => 552,  903 => 548,  899 => 546,  893 => 544,  891 => 543,  876 => 531,  868 => 526,  865 => 525,  863 => 524,  860 => 523,  854 => 519,  846 => 516,  839 => 514,  826 => 513,  820 => 511,  815 => 509,  810 => 508,  808 => 507,  805 => 506,  802 => 505,  799 => 504,  795 => 503,  793 => 502,  791 => 501,  786 => 499,  784 => 498,  781 => 497,  777 => 495,  774 => 494,  756 => 493,  752 => 491,  746 => 489,  742 => 487,  740 => 486,  737 => 485,  735 => 484,  730 => 482,  727 => 481,  723 => 480,  711 => 471,  703 => 466,  699 => 464,  697 => 463,  693 => 461,  685 => 459,  683 => 458,  679 => 457,  669 => 455,  666 => 454,  652 => 453,  640 => 450,  636 => 448,  627 => 446,  623 => 445,  614 => 444,  612 => 443,  608 => 441,  602 => 439,  600 => 438,  597 => 437,  587 => 436,  584 => 435,  580 => 433,  574 => 431,  572 => 430,  568 => 429,  565 => 428,  562 => 427,  548 => 426,  326 => 206,  320 => 202,  316 => 200,  307 => 198,  303 => 197,  297 => 193,  288 => 191,  284 => 190,  280 => 188,  278 => 187,  274 => 185,  271 => 184,  126 => 43,  123 => 42,  118 => 39,  112 => 36,  109 => 35,  107 => 34,  102 => 32,  95 => 31,  92 => 30,  85 => 26,  82 => 25,  74 => 22,  67 => 18,  63 => 16,  61 => 15,  58 => 14,  52 => 11,  46 => 9,  43 => 8,  40 => 7,  37 => 6,  34 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% from _self import form_tree_entry, form_tree_details %}*/
/* */
/* {% block toolbar %}*/
/*     {% if collector.data.nb_errors > 0 or collector.data.forms|length %}*/
/*         {% set status_color = collector.data.nb_errors ? 'red' : '' %}*/
/*         {% set icon %}*/
/*             {{ include('@WebProfiler/Icon/form.svg') }}*/
/*             <span class="sf-toolbar-value">*/
/*                 {{ collector.data.nb_errors ?: collector.data.forms|length }}*/
/*             </span>*/
/*         {% endset %}*/
/* */
/*         {% set text %}*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Number of forms</b>*/
/*                 <span class="sf-toolbar-status">{{ collector.data.forms|length }}</span>*/
/*             </div>*/
/*             <div class="sf-toolbar-info-piece">*/
/*                 <b>Number of errors</b>*/
/*                 <span class="sf-toolbar-status sf-toolbar-status-{{ collector.data.nb_errors > 0 ? 'red' }}">{{ collector.data.nb_errors }}</span>*/
/*             </div>*/
/*         {% endset %}*/
/* */
/*         {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label label-status-{{ collector.data.nb_errors ? 'error' }} {{ collector.data.forms is empty ? 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/form.svg') }}</span>*/
/*         <strong>Forms</strong>*/
/*         {% if collector.data.nb_errors > 0 %}*/
/*             <span class="count">*/
/*                 <span>{{ collector.data.nb_errors }}</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block head %}*/
/*     {{ parent() }}*/
/* */
/*     <style>*/
/*         #tree-menu {*/
/*             float: left;*/
/*             padding-right: 10px;*/
/*             width: 230px;*/
/*         }*/
/*         #tree-menu ul {*/
/*             list-style: none;*/
/*             margin: 0;*/
/*             padding-left: 0;*/
/*         }*/
/*         #tree-menu li {*/
/*             margin: 0;*/
/*             padding: 0;*/
/*             width: 100%;*/
/*         }*/
/*         #tree-menu .empty {*/
/*             border: 0;*/
/*             mmargin: 0;*/
/*             padding: 0;*/
/*         }*/
/*         #tree-details-container {*/
/*             border-left: 1px solid #DDD;*/
/*             margin-left: 250px;*/
/*             padding-left: 20px;*/
/*         }*/
/*         .tree-details {*/
/*             padding-bottom: 40px;*/
/*         }*/
/*         .tree-details h3 {*/
/*             font-size: 18px;*/
/*             position: relative;*/
/*         }*/
/* */
/*         .toggle-icon {*/
/*             display: inline-block;*/
/*             background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDgwx4LcKwAAAABVQTFRFAAAA////////////////ZmZm////bvjBwAAAAAV0Uk5TABZwsuCVEUjgAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgTQgQGWgA7h2uIFwK+CWwp1BpHvYEqDuATEYkBlY3IOmBq6dCPcAAIT5Eg2IksjQAAAAAElFTkSuQmCC") no-repeat top left #5eb5e0;*/
/*         }*/
/*         .closed .toggle-icon, .closed.toggle-icon {*/
/*             background-position: bottom left;*/
/*         }*/
/*         .toggle-icon.empty {*/
/*             background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAZgBmAGYHukptAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhIf6CA40AAAAFRJREFUOMvtk7ENACEMA61vfx767MROWfO+AdGBHlNyTZrYUZRYDBII4NWE1pNdpFarfgLUbpDaBEgBYRiEVjsvDLa1l6O4Z3wkFWN+OfLKdpisOH/TlICzukmUJwAAAABJRU5ErkJggg==");*/
/*         }*/
/* */
/*         .tree .tree-inner {*/
/*             cursor: pointer;*/
/*             padding: 5px 7px 5px 22px;*/
/*             position: relative;*/
/* */
/*         }*/
/*         .tree .toggle-button {*/
/*             /* provide a bigger clickable area than just 10x10px *//* */
/*             width: 16px;*/
/*             height: 16px;*/
/*             margin-left: -18px;*/
/*         }*/
/*         .tree .toggle-icon {*/
/*             width: 10px;*/
/*             height: 10px;*/
/*             /* position the icon in the center of the clickable area *//* */
/*             margin-left: 3px;*/
/*             margin-top: 3px;*/
/*             background-size: 10px 20px;*/
/*             background-color: #AAA;*/
/*         }*/
/*         .tree .toggle-icon.empty {*/
/*             width: 10px;*/
/*             height: 10px;*/
/*             position: absolute;*/
/*             top: 50%;*/
/*             margin-top: -5px;*/
/*             margin-left: -15px;*/
/*             background-size: 10px 10px;*/
/*         }*/
/*         .tree ul ul .tree-inner {*/
/*             padding-left: 37px;*/
/*         }*/
/*         .tree ul ul ul .tree-inner {*/
/*             padding-left: 52px;*/
/*         }*/
/*         .tree ul ul ul ul .tree-inner {*/
/*             padding-left: 67px;*/
/*         }*/
/*         .tree ul ul ul ul ul .tree-inner {*/
/*             padding-left: 82px;*/
/*         }*/
/*         .tree .tree-inner:hover {*/
/*             background: #dfdfdf;*/
/*         }*/
/*         .tree .tree-inner.active, .tree .tree-inner.active:hover {*/
/*             background: #E0E0E0;*/
/*             font-weight: bold;*/
/*         }*/
/*         .tree .tree-inner.active .toggle-icon, .tree .tree-inner:hover .toggle-icon, .tree .tree-inner.active:hover .toggle-icon {*/
/*             background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAgBAMAAADpp+X/AAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhEYXWn+sAAAABhQTFRFAAAA39/f39/f39/f39/fZmZm39/f////gc3YPwAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAAE1JREFUGNNjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBmwgXIgQGWgA7h2uIFwK+CWwp1BpHvYC6DuATEYkBlY3IOmBq6dCPcAADqLE4MnBi/fAAAAAElFTkSuQmCC");*/
/*             background-color: #999;*/
/*         }*/
/*         .tree .tree-inner.active .toggle-icon.empty, .tree .tree-inner:hover .toggle-icon.empty, .tree .tree-inner.active:hover .toggle-icon.empty {*/
/*             background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3QweDhoucSey4gAAABVQTFRFAAAA39/f39/f39/f39/fZmZm39/fD5Dx2AAAAAV0Uk5TAAtAc6ZeVyCYAAAAAWJLR0QF+G/pxwAAADJJREFUCNdjSHMSYGBgUEljSGYAAzMGBwiDhUEBwmBiEIAwGBnIA3DtcAPhVsAthTkDAFOfBKW9C1iqAAAAAElFTkSuQmCC");*/
/*         }*/
/*         .tree-details .toggle-icon {*/
/*             width: 16px;*/
/*             height: 16px;*/
/*             /* vertically center the button *//* */
/*             position: absolute;*/
/*             top: 50%;*/
/*             margin-top: -9px;*/
/*             margin-left: 6px;*/
/*         }*/
/*         .form-type {*/
/*             color: #999;*/
/*         }*/
/*         .badge-error {*/
/*             float: right;*/
/*             background: #B0413E;*/
/*             color: #FFF;*/
/*             padding: 1px 4px;*/
/*             font-size: 10px;*/
/*             font-weight: bold;*/
/*             vertical-align: middle;*/
/*         }*/
/*         .errors h3 {*/
/*             color: #B0413E;*/
/*         }*/
/*         .errors th {*/
/*             background: #B0413E;*/
/*             color: #FFF;*/
/*         }*/
/*         .errors .toggle-icon {*/
/*             background-color: #B0413E;*/
/*         }*/
/*         h3 a, h3 a:hover, h3 a:focus {*/
/*             color: inherit;*/
/*             text-decoration: inherit;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Forms</h2>*/
/* */
/*     {% if collector.data.forms|length %}*/
/*         <div id="tree-menu" class="tree">*/
/*             <ul>*/
/*             {% for formName, formData in collector.data.forms %}*/
/*                 {{ form_tree_entry(formName, formData, true) }}*/
/*             {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/* */
/*         <div id="tree-details-container">*/
/*             {% for formName, formData in collector.data.forms %}*/
/*                 {{ form_tree_details(formName, formData, collector.data.forms_by_hash) }}*/
/*             {% endfor %}*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="empty">*/
/*             <p>No forms were submitted for this request.</p>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <script>*/
/*     function Toggler(storage) {*/
/*         "use strict";*/
/* */
/*         var STORAGE_KEY = 'sf_toggle_data',*/
/* */
/*             states = {},*/
/* */
/*             isCollapsed = function (button) {*/
/*                 return Sfjs.hasClass(button, 'closed');*/
/*             },*/
/* */
/*             isExpanded = function (button) {*/
/*                 return !isCollapsed(button);*/
/*             },*/
/* */
/*             expand = function (button) {*/
/*                 var targetId = button.dataset.toggleTargetId,*/
/*                     target = document.getElementById(targetId);*/
/* */
/*                 if (!target) {*/
/*                     throw "Toggle target " + targetId + " does not exist";*/
/*                 }*/
/* */
/*                 if (isCollapsed(button)) {*/
/*                     Sfjs.removeClass(button, 'closed');*/
/*                     Sfjs.removeClass(target, 'hidden');*/
/* */
/*                     states[targetId] = 1;*/
/*                     storage.setItem(STORAGE_KEY, states);*/
/*                 }*/
/*             },*/
/* */
/*             collapse = function (button) {*/
/*                 var targetId = button.dataset.toggleTargetId,*/
/*                     target = document.getElementById(targetId);*/
/* */
/*                 if (!target) {*/
/*                     throw "Toggle target " + targetId + " does not exist";*/
/*                 }*/
/* */
/*                 if (isExpanded(button)) {*/
/*                     Sfjs.addClass(button, 'closed');*/
/*                     Sfjs.addClass(target, 'hidden');*/
/* */
/*                     states[targetId] = 0;*/
/*                     storage.setItem(STORAGE_KEY, states);*/
/*                 }*/
/*             },*/
/* */
/*             toggle = function (button) {*/
/*                 if (Sfjs.hasClass(button, 'closed')) {*/
/*                     expand(button);*/
/*                 } else {*/
/*                     collapse(button);*/
/*                 }*/
/*             },*/
/* */
/*             initButtons = function (buttons) {*/
/*                 states = storage.getItem(STORAGE_KEY, {});*/
/* */
/*                 // must be an object, not an array or anything else*/
/*                 // `typeof` returns "object" also for arrays, so the following*/
/*                 // check must be done*/
/*                 // see http://stackoverflow.com/questions/4775722/check-if-object-is-array*/
/*                 if ('[object Object]' !== Object.prototype.toString.call(states)) {*/
/*                     states = {};*/
/*                 }*/
/* */
/*                 for (var i = 0, l = buttons.length; i < l; ++i) {*/
/*                     var targetId = buttons[i].dataset.toggleTargetId,*/
/*                         target = document.getElementById(targetId);*/
/* */
/*                     if (!target) {*/
/*                         throw "Toggle target " + targetId + " does not exist";*/
/*                     }*/
/* */
/*                     // correct the initial state of the button*/
/*                     if (Sfjs.hasClass(target, 'hidden')) {*/
/*                         Sfjs.addClass(buttons[i], 'closed');*/
/*                     }*/
/* */
/*                     // attach listener for expanding/collapsing the target*/
/*                     clickHandler(buttons[i], toggle);*/
/* */
/*                     if (states.hasOwnProperty(targetId)) {*/
/*                         // open or collapse based on stored data*/
/*                         if (0 === states[targetId]) {*/
/*                             collapse(buttons[i]);*/
/*                         } else {*/
/*                             expand(buttons[i]);*/
/*                         }*/
/*                     }*/
/*                 }*/
/*             };*/
/* */
/*         return {*/
/*             initButtons: initButtons,*/
/* */
/*             toggle: toggle,*/
/* */
/*             isExpanded: isExpanded,*/
/* */
/*             isCollapsed: isCollapsed,*/
/* */
/*             expand: expand,*/
/* */
/*             collapse: collapse*/
/*         };*/
/*     }*/
/* */
/*     function JsonStorage(storage) {*/
/*         var setItem = function (key, data) {*/
/*                 storage.setItem(key, JSON.stringify(data));*/
/*             },*/
/* */
/*             getItem = function (key, defaultValue) {*/
/*                 var data = storage.getItem(key);*/
/* */
/*                 if (null !== data) {*/
/*                     try {*/
/*                         return JSON.parse(data);*/
/*                     } catch(e) {*/
/*                     }*/
/*                 }*/
/* */
/*                 return defaultValue;*/
/*             };*/
/* */
/*         return {*/
/*             setItem: setItem,*/
/* */
/*             getItem: getItem*/
/*         };*/
/*     }*/
/* */
/*     function TabView() {*/
/*         "use strict";*/
/* */
/*         var activeTab = null,*/
/* */
/*             activeTarget = null,*/
/* */
/*             select = function (tab) {*/
/*                 var targetId = tab.dataset.tabTargetId,*/
/*                     target = document.getElementById(targetId);*/
/* */
/*                 if (!target) {*/
/*                     throw "Tab target " + targetId + " does not exist";*/
/*                 }*/
/* */
/*                 if (activeTab) {*/
/*                     Sfjs.removeClass(activeTab, 'active');*/
/*                 }*/
/* */
/*                 if (activeTarget) {*/
/*                     Sfjs.addClass(activeTarget, 'hidden');*/
/*                 }*/
/* */
/*                 Sfjs.addClass(tab, 'active');*/
/*                 Sfjs.removeClass(target, 'hidden');*/
/* */
/*                 activeTab = tab;*/
/*                 activeTarget = target;*/
/*             },*/
/* */
/*             initTabs = function (tabs) {*/
/*                 for (var i = 0, l = tabs.length; i < l; ++i) {*/
/*                     var targetId = tabs[i].dataset.tabTargetId,*/
/*                         target = document.getElementById(targetId);*/
/* */
/*                     if (!target) {*/
/*                         throw "Tab target " + targetId + " does not exist";*/
/*                     }*/
/* */
/*                     clickHandler(tabs[i], select);*/
/* */
/*                     Sfjs.addClass(target, 'hidden');*/
/*                 }*/
/* */
/*                 if (tabs.length > 0) {*/
/*                     select(tabs[0]);*/
/*                 }*/
/*             };*/
/* */
/*         return {*/
/*             initTabs: initTabs,*/
/* */
/*             select: select*/
/*         };*/
/*     }*/
/* */
/*     var tabTarget = new TabView(),*/
/*         toggler = new Toggler(new JsonStorage(sessionStorage)),*/
/*         clickHandler = function (element, callback) {*/
/*             Sfjs.addEventListener(element, 'click', function (e) {*/
/*                 if (!e) {*/
/*                     e = window.event;*/
/*                 }*/
/* */
/*                 callback(this);*/
/* */
/*                 if (e.preventDefault) {*/
/*                     e.preventDefault();*/
/*                 } else {*/
/*                     e.returnValue = false;*/
/*                 }*/
/* */
/*                 e.stopPropagation();*/
/* */
/*                 return false;*/
/*             });*/
/*         };*/
/* */
/*     tabTarget.initTabs(document.querySelectorAll('.tree .tree-inner'));*/
/*     toggler.initButtons(document.querySelectorAll('a.toggle-button'));*/
/*     </script>*/
/* {% endblock %}*/
/* */
/* {% macro form_tree_entry(name, data, expanded) %}*/
/*     {% import _self as tree %}*/
/*     <li>*/
/*         <div class="tree-inner" data-tab-target-id="{{ data.id }}-details">*/
/*             {% if data.children is not empty %}*/
/*                 <a class="toggle-button" data-toggle-target-id="{{ data.id }}-children" href="#"><span class="toggle-icon"></span></a>*/
/*             {% else %}*/
/*                 <div class="toggle-icon empty"></div>*/
/*             {% endif %}*/
/* */
/*             {{ name|default('(no name)') }} {% if data.type_class is defined %}[<abbr title="{{ data.type_class }}">{{ data.type_class|split('\\')|last }}</abbr>]{% endif %}*/
/* */
/*             {% if data.errors is defined and data.errors|length > 0 %}*/
/*                 <div class="badge-error">{{ data.errors|length }}</div>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if data.children is not empty %}*/
/*             <ul id="{{ data.id }}-children" {% if not expanded %}class="hidden"{% endif %}>*/
/*                 {% for childName, childData in data.children %}*/
/*                     {{ tree.form_tree_entry(childName, childData, false) }}*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     </li>*/
/* {% endmacro %}*/
/* */
/* {% macro form_tree_details(name, data, forms_by_hash) %}*/
/*     {% import _self as tree %}*/
/*     <div class="tree-details" {% if data.id is defined %}id="{{ data.id }}-details"{% endif %}>*/
/*         <h2>*/
/*             {{ name|default('(no name)') }}*/
/*             {% if data.type_class is defined and data.type is defined %}*/
/*             <span class="form-type">[<abbr title="{{ data.type_class }}">{{ data.type }}</abbr>]</span>*/
/*             {% endif %}*/
/*         </h2>*/
/* */
/*         {% if data.errors is defined and data.errors|length > 0 %}*/
/*         <div class="errors">*/
/*             <h3>*/
/*                 <a class="toggle-button" data-toggle-target-id="{{ data.id }}-errors" href="#">*/
/*                     Errors <span class="toggle-icon"></span>*/
/*                 </a>*/
/*             </h3>*/
/* */
/*             <table id="{{ data.id }}-errors">*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Message</th>*/
/*                         <th>Origin</th>*/
/*                         <th>Cause</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for error in data.errors %}*/
/*                 <tr>*/
/*                     <td>{{ error.message }}</td>*/
/*                     <td>*/
/*                         {% if error.origin is empty %}*/
/*                             <em>This form.</em>*/
/*                         {% elseif forms_by_hash[error.origin] is not defined %}*/
/*                             <em>Unknown.</em>*/
/*                         {% else %}*/
/*                             {{ forms_by_hash[error.origin].name }}*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td>*/
/*                         {% for trace in error.trace %}*/
/*                             {% if not loop.first %}*/
/*                                 <span class="newline">Caused by:</span>*/
/*                             {% endif %}*/
/* */
/*                             {% if trace.root is defined %}*/
/*                                 <strong class="newline">{{ trace.class }}</strong>*/
/*                                 <pre>*/
/*                                     {{- trace.root -}}*/
/*                                     {%- if trace.path is not empty -%}*/
/*                                         {%- if trace.path|first != '[' %}.{% endif -%}*/
/*                                         {{- trace.path -}}*/
/*                                     {%- endif %} = {{ trace.value -}}*/
/*                                 </pre>*/
/*                             {% elseif trace.message is defined %}*/
/*                                 <strong class="newline">{{ trace.class }}</strong>*/
/*                                 <pre>{{ trace.message }}</pre>*/
/*                             {% else %}*/
/*                                 <pre>{{ trace }}</pre>*/
/*                             {% endif %}*/
/*                         {% else %}*/
/*                             <em>Unknown.</em>*/
/*                         {% endfor %}*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if data.default_data is defined %}*/
/*         <h3>*/
/*             <a class="toggle-button" data-toggle-target-id="{{ data.id }}-default_data" href="#">*/
/*                 Default Data <span class="toggle-icon"></span>*/
/*             </a>*/
/*         </h3>*/
/* */
/*         <div id="{{ data.id }}-default_data">*/
/*             <table>*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th width="180">Property</th>*/
/*                         <th>Value</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <th class="font-normal" scope="row">Model Format</th>*/
/*                         <td>*/
/*                             {% if data.default_data.model is defined %}*/
/*                                 {{ data.default_data.model }}*/
/*                             {% else %}*/
/*                                 <em class="font-normal text-muted">same as normalized format</em>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th class="font-normal" scope="row">Normalized Format</th>*/
/*                         <td>{{ data.default_data.norm }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th class="font-normal" scope="row">View Format</th>*/
/*                         <td>*/
/*                             {% if data.default_data.view is defined %}*/
/*                                 {{ data.default_data.view }}*/
/*                             {% else %}*/
/*                                 <em class="font-normal text-muted">same as normalized format</em>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if data.submitted_data is defined %}*/
/*         <h3>*/
/*             <a class="toggle-button" data-toggle-target-id="{{ data.id }}-submitted_data" href="#">*/
/*                 Submitted Data <span class="toggle-icon"></span>*/
/*             </a>*/
/*         </h3>*/
/* */
/*         <div id="{{ data.id }}-submitted_data">*/
/*         {% if data.submitted_data.norm is defined %}*/
/*             <table>*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th width="180">Property</th>*/
/*                         <th>Value</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <th class="font-normal" scope="row">View Format</th>*/
/*                         <td>*/
/*                             {% if data.submitted_data.view is defined %}*/
/*                                 {{ data.submitted_data.view }}*/
/*                             {% else %}*/
/*                                 <em class="font-normal text-muted">same as normalized format</em>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th class="font-normal" scope="row">Normalized Format</th>*/
/*                         <td>{{ data.submitted_data.norm }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th class="font-normal" scope="row">Model Format</th>*/
/*                         <td>*/
/*                             {% if data.submitted_data.model is defined %}*/
/*                                 {{ data.submitted_data.model }}*/
/*                             {% else %}*/
/*                                 <em class="font-normal text-muted">same as normalized format</em>*/
/*                             {% endif %}*/
/*                         </td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         {% else %}*/
/*             <div class="empty">*/
/*                 <p>This form was not submitted.</p>*/
/*             </div>*/
/*         {% endif %}*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if data.passed_options is defined %}*/
/*         <h3>*/
/*             <a class="toggle-button" data-toggle-target-id="{{ data.id }}-passed_options" href="#">*/
/*                 Passed Options <span class="toggle-icon"></span>*/
/*             </a>*/
/*         </h3>*/
/* */
/*         <div id="{{ data.id }}-passed_options">*/
/*             {% if data.passed_options|length %}*/
/*             <table>*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th width="180">Option</th>*/
/*                         <th>Passed Value</th>*/
/*                         <th>Resolved Value</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for option, value in data.passed_options %}*/
/*                 <tr>*/
/*                     <th>{{ option }}</th>*/
/*                     <td>{{ value }}</td>*/
/*                     <td>*/
/*                         {% if data.resolved_options[option] is same as(value) %}*/
/*                             <em class="font-normal text-muted">same as passed value</em>*/
/*                         {% else %}*/
/*                             {{ data.resolved_options[option] }}*/
/*                         {% endif %}*/
/*                     </td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*             {% else %}*/
/*                 <div class="empty">*/
/*                     <p>No options where passed when constructing this form.</p>*/
/*                 </div>*/
/*             {% endif %}*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if data.resolved_options is defined %}*/
/*         <h3>*/
/*             <a class="toggle-button" data-toggle-target-id="{{ data.id }}-resolved_options" href="#">*/
/*                 Resolved Options <span class="toggle-icon"></span>*/
/*             </a>*/
/*         </h3>*/
/* */
/*         <div id="{{ data.id }}-resolved_options" class="hidden">*/
/*             <table>*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th width="180">Option</th>*/
/*                         <th>Value</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for option, value in data.resolved_options %}*/
/*                 <tr>*/
/*                     <th scope="row">{{ option }}</th>*/
/*                     <td>{{ value }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         {% if data.view_vars is defined %}*/
/*         <h3>*/
/*             <a class="toggle-button" data-toggle-target-id="{{ data.id }}-view_vars" href="#">*/
/*                 View Variables <span class="toggle-icon"></span>*/
/*             </a>*/
/*         </h3>*/
/* */
/*         <div id="{{ data.id }}-view_vars" class="hidden">*/
/*             <table>*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th width="180">Variable</th>*/
/*                         <th>Value</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for variable, value in data.view_vars %}*/
/*                 <tr>*/
/*                     <th scope="row">{{ variable }}</th>*/
/*                     <td>{{ value }}</td>*/
/*                 </tr>*/
/*                 {% endfor %}*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     {% for childName, childData in data.children %}*/
/*         {{ tree.form_tree_details(childName, childData, forms_by_hash) }}*/
/*     {% endfor %}*/
/* {% endmacro %}*/
/* */