<?php
/**
 * Config-file for navigation bar.
 *
 */

$urlHome  = $this->di->get("url")->create("");
$urlAbout = $this->di->get("url")->create("about");
$urlReport = $this->di->get("url")->create("report");
$urlRemServer = $this->di->get("url")->create("remserver");
$urlComments = $this->di->get("url")->create("comments");
$urlBooks = $this->di->get("url")->create("book");
$urlProfile = $this->di->get("url")->create("user");

return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",

        // Here comes the menu structure
        "items" => [

            "home" => [
                "text" => t("HOME"),
                "url" => $urlHome,
                "title" => t("Home"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text" => t("ABOUT"),
                "url" => $urlAbout,
                "title" => t("About"),
                "mark-if-parent" => true,
            ],

            "report" => [
                "text" => t("REPORT"),
                "url" => $urlReport,
                "title" => t("Report"),
                "mark-if-parent" => true,
            ],
            "remserver" => [
                "text" => t("REM SERVER"),
                "url" => $urlRemServer,
                "title" => t("REM Server"),
                "mark-if-parent" => true,
            ],
            "comments" => [
                "text" => t("COMMENTS"),
                "url" => $urlComments,
                "title" => t("Comments"),
                "mark-if-parent" => true,
            ],
            "book" => [
                "text" => t("BOOKS"),
                "url" => $urlBooks,
                "title" => t("Books"),
                "mark-if-parent" => true,
            ],
            "user" => [
                "text" => t("PROFIL"),
                "url" => $urlProfile,
                "title" => t("Profil"),
                "mark-if-parent" => true,
            ],
        ],
    ],

    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",

        // Here comes the menu structure
        "items" => [

            "home" => [
                "text" => t("HOME"),
                "url" => $urlHome,
                "title" => t("Home"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text" => t("ABOUT"),
                "url" => $urlAbout,
                "title" => t("About"),
                "mark-if-parent" => true,
            ],

            "report" => [
                "text" => t("REPORT"),
                "url" => $urlReport,
                "title" => t("Report"),
                "mark-if-parent" => true,
            ],
            "remserver" => [
                "text" => t("REM SERVER"),
                "url" => $urlRemServer,
                "title" => t("REM Server"),
                "mark-if-parent" => true,
            ],
            "comments" => [
                "text" => t("COMMENTS"),
                "url" => $urlComments,
                "title" => t("Comments"),
                "mark-if-parent" => true,
            ],
            "book" => [
                "text" => t("BOOKS"),
                "url" => $urlBooks,
                "title" => t("Books"),
                "mark-if-parent" => true,
            ],
            "user" => [
                "text" => t("PROFIL"),
                "url" => $urlProfile,
                "title" => t("Profil"),
                "mark-if-parent" => true,
            ],
        ],
    ],

    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },

    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },

   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
