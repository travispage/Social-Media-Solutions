<?php exit; ?>{
    "version": "0.9.5.2",
    "cluster.messagebus.debug": false,
    "cluster.messagebus.enabled": false,
    "cluster.messagebus.sns.region": "",
    "cluster.messagebus.sns.api_key": "",
    "cluster.messagebus.sns.api_secret": "",
    "cluster.messagebus.sns.topic_arn": "",
    "dbcache.configuration_overloaded": false,
    "dbcache.debug": false,
    "dbcache.enabled": true,
    "dbcache.engine": "file",
    "dbcache.file.gc": 3600,
    "dbcache.file.locking": false,
    "dbcache.lifetime": 180,
    "dbcache.memcached.persistent": true,
    "dbcache.memcached.aws_autodiscovery": false,
    "dbcache.memcached.servers": [
        "127.0.0.1:11211"
    ],
    "dbcache.memcached.username": "",
    "dbcache.memcached.password": "",
    "dbcache.redis.persistent": true,
    "dbcache.redis.servers": [
        "127.0.0.1:6379"
    ],
    "dbcache.redis.password": "",
    "dbcache.redis.dbid": 0,
    "dbcache.reject.constants": [
        "APP_REQUEST",
        "DOING_CRON",
        "DONOTCACHEDB",
        "SHORTINIT",
        "XMLRPC_REQUEST"
    ],
    "dbcache.reject.cookie": [],
    "dbcache.reject.logged": true,
    "dbcache.reject.sql": [
        "gdsr_",
        "wp_rg_",
        "_wp_session_"
    ],
    "dbcache.reject.uri": [],
    "dbcache.reject.words": [
        "^\\s*insert\\b",
        "^\\s*delete\\b",
        "^\\s*update\\b",
        "^\\s*replace\\b",
        "^\\s*create\\b",
        "^\\s*alter\\b",
        "^\\s*show\\b",
        "^\\s*set\\b",
        "\\bautoload\\s+=\\s+'yes'",
        "\\bsql_calc_found_rows\\b",
        "\\bfound_rows\\(\\)",
        "\\bw3tc_request_data\\b"
    ],
    "objectcache.configuration_overloaded": false,
    "objectcache.enabled": true,
    "objectcache.debug": false,
    "objectcache.enabled_for_wp_admin": true,
    "objectcache.fallback_transients": true,
    "objectcache.engine": "file",
    "objectcache.file.gc": 3600,
    "objectcache.file.locking": false,
    "objectcache.memcached.servers": [
        "127.0.0.1:11211"
    ],
    "objectcache.memcached.persistent": true,
    "objectcache.memcached.aws_autodiscovery": false,
    "objectcache.memcached.username": "",
    "objectcache.memcached.password": "",
    "objectcache.redis.persistent": true,
    "objectcache.redis.servers": [
        "127.0.0.1:6379"
    ],
    "objectcache.redis.password": "",
    "objectcache.redis.dbid": 0,
    "objectcache.groups.global": [
        "users",
        "userlogins",
        "usermeta",
        "user_meta",
        "site-transient",
        "site-options",
        "site-lookup",
        "blog-lookup",
        "blog-details",
        "rss",
        "global-posts"
    ],
    "objectcache.groups.nonpersistent": [
        "comment",
        "counts",
        "plugins"
    ],
    "objectcache.lifetime": 180,
    "objectcache.purge.all": false,
    "pgcache.configuration_overloaded": false,
    "pgcache.enabled": true,
    "pgcache.comment_cookie_ttl": 1800,
    "pgcache.debug": false,
    "pgcache.engine": "file_generic",
    "pgcache.file.gc": 3600,
    "pgcache.file.nfs": false,
    "pgcache.file.locking": false,
    "pgcache.lifetime": 3600,
    "pgcache.memcached.servers": [
        "127.0.0.1:11211"
    ],
    "pgcache.memcached.persistent": true,
    "pgcache.memcached.aws_autodiscovery": false,
    "pgcache.memcached.username": "",
    "pgcache.memcached.password": "",
    "pgcache.redis.persistent": true,
    "pgcache.redis.servers": [
        "127.0.0.1:6379"
    ],
    "pgcache.redis.password": "",
    "pgcache.redis.dbid": 0,
    "pgcache.cache.query": true,
    "pgcache.cache.home": true,
    "pgcache.cache.feed": true,
    "pgcache.cache.nginx_handle_xml": false,
    "pgcache.cache.ssl": true,
    "pgcache.cache.404": true,
    "pgcache.cache.headers": [
        "Last-Modified",
        "Content-Type",
        "X-Pingback",
        "P3P"
    ],
    "pgcache.compatibility": false,
    "pgcache.remove_charset": false,
    "pgcache.accept.uri": [
        "sitemap(_index)?\\.xml(\\.gz)?",
        "([a-z0-9_\\-]+)?sitemap\\.xsl",
        "[a-z0-9_\\-]+-sitemap([0-9]+)?\\.xml(\\.gz)?"
    ],
    "pgcache.accept.files": [
        "wp-comments-popup.php",
        "wp-links-opml.php",
        "wp-locations.php"
    ],
    "pgcache.accept.qs": [
        ""
    ],
    "pgcache.late_init": false,
    "pgcache.late_caching": false,
    "pgcache.mirrors.enabled": true,
    "pgcache.mirrors.home_urls": [],
    "pgcache.reject.front_page": true,
    "pgcache.reject.logged": true,
    "pgcache.reject.logged_roles": true,
    "pgcache.reject.roles": [
        "administrator"
    ],
    "pgcache.reject.uri": [
        "wp-.*\\.php",
        "index\\.php"
    ],
    "pgcache.reject.ua": [
        ""
    ],
    "pgcache.reject.cookie": [
        "wptouch_switch_toggle"
    ],
    "pgcache.reject.request_head": false,
    "pgcache.purge.front_page": false,
    "pgcache.purge.home": true,
    "pgcache.purge.post": true,
    "pgcache.purge.comments": false,
    "pgcache.purge.author": false,
    "pgcache.purge.terms": false,
    "pgcache.purge.archive.daily": false,
    "pgcache.purge.archive.monthly": false,
    "pgcache.purge.archive.yearly": false,
    "pgcache.purge.feed.blog": true,
    "pgcache.purge.feed.comments": false,
    "pgcache.purge.feed.author": false,
    "pgcache.purge.feed.terms": false,
    "pgcache.purge.feed.types": [
        "rss2"
    ],
    "pgcache.purge.postpages_limit": 10,
    "pgcache.purge.pages": [
        ""
    ],
    "pgcache.purge.sitemap_regex": "([a-z0-9_\\-]*?)sitemap([a-z0-9_\\-]*)?\\.xml",
    "pgcache.prime.enabled": true,
    "pgcache.prime.interval": 900,
    "pgcache.prime.limit": 10,
    "pgcache.prime.sitemap": "\/sitemap_index.xml",
    "pgcache.prime.post.enabled": false,
    "stats.enabled": false,
    "minify.configuration_overloaded": false,
    "minify.enabled": true,
    "minify.auto": false,
    "minify.debug": false,
    "minify.engine": "file",
    "minify.error.notification": "",
    "minify.file.gc": "86400",
    "minify.file.nfs": false,
    "minify.file.locking": false,
    "minify.memcached.servers": [
        "127.0.0.1:11211"
    ],
    "minify.memcached.persistent": true,
    "minify.memcached.aws_autodiscovery": false,
    "minify.memcached.username": "",
    "minify.memcached.password": "",
    "minify.redis.persistent": true,
    "minify.redis.servers": [
        "127.0.0.1:6379"
    ],
    "minify.redis.password": "",
    "minify.redis.dbid": 0,
    "minify.rewrite": "1",
    "minify.options": [],
    "minify.symlinks": [],
    "minify.lifetime": "86400",
    "minify.upload": true,
    "minify.html.enable": "1",
    "minify.html.engine": "html",
    "minify.html.reject.feed": "0",
    "minify.html.inline.css": "0",
    "minify.html.inline.js": "0",
    "minify.html.strip.crlf": "0",
    "minify.html.comments.ignore": [
        "google_ad_",
        "RSPEAK_"
    ],
    "minify.css.combine": "0",
    "minify.css.enable": "1",
    "minify.css.engine": "css",
    "minify.css.http2push": false,
    "minify.css.strip.comments": "0",
    "minify.css.strip.crlf": "1",
    "minify.css.embed": false,
    "minify.css.imports": "process",
    "minify.css.groups": [],
    "minify.js.http2push": false,
    "minify.js.enable": "1",
    "minify.js.engine": "js",
    "minify.js.combine.header": "1",
    "minify.js.header.embed_type": "blocking",
    "minify.js.combine.body": "1",
    "minify.js.body.embed_type": "blocking",
    "minify.js.combine.footer": "1",
    "minify.js.footer.embed_type": "blocking",
    "minify.js.strip.comments": "0",
    "minify.js.strip.crlf": "0",
    "minify.js.groups": [],
    "minify.yuijs.path.java": "java",
    "minify.yuijs.path.jar": "yuicompressor.jar",
    "minify.yuijs.options.line-break": 5000,
    "minify.yuijs.options.nomunge": false,
    "minify.yuijs.options.preserve-semi": false,
    "minify.yuijs.options.disable-optimizations": false,
    "minify.yuicss.path.java": "java",
    "minify.yuicss.path.jar": "yuicompressor.jar",
    "minify.yuicss.options.line-break": 5000,
    "minify.ccjs.path.java": "java",
    "minify.ccjs.path.jar": "compiler.jar",
    "minify.ccjs.options.compilation_level": "SIMPLE_OPTIMIZATIONS",
    "minify.ccjs.options.formatting": "",
    "minify.csstidy.options.remove_bslash": true,
    "minify.csstidy.options.compress_colors": true,
    "minify.csstidy.options.compress_font-weight": true,
    "minify.csstidy.options.lowercase_s": false,
    "minify.csstidy.options.optimise_shorthands": 1,
    "minify.csstidy.options.remove_last_;": false,
    "minify.csstidy.options.case_properties": 1,
    "minify.csstidy.options.sort_properties": false,
    "minify.csstidy.options.sort_selectors": false,
    "minify.csstidy.options.merge_selectors": 2,
    "minify.csstidy.options.discard_invalid_properties": false,
    "minify.csstidy.options.css_level": "CSS2.1",
    "minify.csstidy.options.preserve_css": false,
    "minify.csstidy.options.timestamp": false,
    "minify.csstidy.options.template": "default",
    "minify.htmltidy.options.clean": false,
    "minify.htmltidy.options.hide-comments": true,
    "minify.htmltidy.options.wrap": 0,
    "minify.reject.logged": "1",
    "minify.reject.ua": [
        ""
    ],
    "minify.reject.uri": [
        ""
    ],
    "minify.reject.files.js": [
        ""
    ],
    "minify.reject.files.css": [
        ""
    ],
    "minify.cache.files": [
        "https:\/\/ajax.googleapis.com"
    ],
    "minify.cache.files_regexp": false,
    "cdn.configuration_overloaded": false,
    "cdn.enabled": false,
    "cdn.debug": false,
    "cdn.engine": "maxcdn",
    "cdn.uploads.enable": true,
    "cdn.includes.enable": true,
    "cdn.includes.files": "*.css;*.js;*.gif;*.png;*.jpg;*.xml",
    "cdn.theme.enable": true,
    "cdn.theme.files": "*.css;*.js;*.gif;*.png;*.jpg;*.ico;*.ttf;*.otf,*.woff,*.less",
    "cdn.minify.enable": true,
    "cdn.custom.enable": true,
    "cdn.custom.files": [
        "favicon.ico",
        "{wp_content_dir}\/gallery\/*",
        "{wp_content_dir}\/uploads\/avatars\/*",
        "{plugins_dir}\/wordpress-seo\/css\/xml-sitemap.xsl",
        "{plugins_dir}\/wp-minify\/min*",
        "{plugins_dir}\/*.js",
        "{plugins_dir}\/*.css",
        "{plugins_dir}\/*.gif",
        "{plugins_dir}\/*.jpg",
        "{plugins_dir}\/*.png"
    ],
    "cdn.import.files": "",
    "cdn.queue.interval": 900,
    "cdn.queue.limit": 25,
    "cdn.force.rewrite": false,
    "cdn.autoupload.enabled": false,
    "cdn.autoupload.interval": 3600,
    "cdn.canonical_header": false,
    "cdn.ftp.host": "",
    "cdn.ftp.type": "",
    "cdn.ftp.user": "",
    "cdn.ftp.pass": "",
    "cdn.ftp.path": "",
    "cdn.ftp.pasv": false,
    "cdn.ftp.domain": [],
    "cdn.ftp.ssl": "auto",
    "cdn.google_drive.client_id": "",
    "cdn.google_drive.refresh_token": "",
    "cdn.google_drive.folder.id": "",
    "cdn.google_drive.folder.title": "",
    "cdn.google_drive.folder.url": "",
    "cdn.highwinds.account_hash": "",
    "cdn.highwinds.api_token": "",
    "cdn.highwinds.host.hash_code": "",
    "cdn.highwinds.host.domains": [],
    "cdn.highwinds.ssl": "auto",
    "cdn.s3.key": "",
    "cdn.s3.secret": "",
    "cdn.s3.bucket": "",
    "cdn.s3.cname": [],
    "cdn.s3.ssl": "auto",
    "cdn.s3_compatible.api_host": "auto",
    "cdn.cf.key": "",
    "cdn.cf.secret": "",
    "cdn.cf.bucket": "",
    "cdn.cf.id": "",
    "cdn.cf.cname": [],
    "cdn.cf.ssl": "auto",
    "cdn.cf2.key": "",
    "cdn.cf2.secret": "",
    "cdn.cf2.id": "",
    "cdn.cf2.cname": [],
    "cdn.cf2.ssl": "",
    "cdn.rscf.user": "",
    "cdn.rscf.key": "",
    "cdn.rscf.location": "ORD",
    "cdn.rscf.container": "",
    "cdn.rscf.cname": [],
    "cdn.rscf.ssl": "auto",
    "cdn.rackspace_cdn.user_name": "",
    "cdn.rackspace_cdn.api_key": "",
    "cdn.rackspace_cdn.region": "",
    "cdn.rackspace_cdn.service.access_url": "",
    "cdn.rackspace_cdn.service.id": "",
    "cdn.rackspace_cdn.service.name": "",
    "cdn.rackspace_cdn.service.protocol": "http",
    "cdn.rackspace_cdn.domains": [],
    "cdn.azure.user": "",
    "cdn.azure.key": "",
    "cdn.azure.container": "",
    "cdn.azure.cname": [],
    "cdn.azure.ssl": "auto",
    "cdn.mirror.domain": [],
    "cdn.mirror.ssl": "auto",
    "cdn.netdna.alias": "",
    "cdn.netdna.consumerkey": "",
    "cdn.netdna.consumersecret": "",
    "cdn.netdna.authorization_key": "",
    "cdn.netdna.domain": [],
    "cdn.netdna.ssl": "auto",
    "cdn.netdna.zone_id": 0,
    "cdn.maxcdn.authorization_key": "",
    "cdn.maxcdn.domain": [],
    "cdn.maxcdn.ssl": "auto",
    "cdn.maxcdn.zone_id": 0,
    "cdn.cotendo.username": "",
    "cdn.cotendo.password": "",
    "cdn.cotendo.zones": [],
    "cdn.cotendo.domain": [],
    "cdn.cotendo.ssl": "auto",
    "cdn.akamai.username": "",
    "cdn.akamai.password": "",
    "cdn.akamai.email_notification": [],
    "cdn.akamai.action": "invalidate",
    "cdn.akamai.zone": "production",
    "cdn.akamai.domain": [],
    "cdn.akamai.ssl": "auto",
    "cdn.edgecast.account": "",
    "cdn.edgecast.token": "",
    "cdn.edgecast.domain": [],
    "cdn.edgecast.ssl": "auto",
    "cdn.att.account": "",
    "cdn.att.token": "",
    "cdn.att.domain": [],
    "cdn.att.ssl": "auto",
    "cdn.reject.admins": false,
    "cdn.reject.logged_roles": false,
    "cdn.reject.roles": [],
    "cdn.reject.ua": [],
    "cdn.reject.uri": [],
    "cdn.reject.files": [
        "{uploads_dir}\/wpcf7_captcha\/*",
        "{uploads_dir}\/imagerotator.swf",
        "{plugins_dir}\/wp-fb-autoconnect\/facebook-platform\/channel.html"
    ],
    "cdn.reject.ssl": false,
    "varnish.configuration_overloaded": false,
    "varnish.enabled": false,
    "varnish.debug": false,
    "varnish.servers": [
        ""
    ],
    "browsercache.configuration_overloaded": false,
    "browsercache.enabled": true,
    "browsercache.rewrite": "0",
    "browsercache.hsts": "0",
    "browsercache.no404wp": "0",
    "browsercache.no404wp.exceptions": [
        "robots\\.txt",
        "[a-z0-9_\\-]*sitemap[a-z0-9_\\-]*\\.(xml|xsl|html)(\\.gz)?"
    ],
    "browsercache.cssjs.last_modified": "1",
    "browsercache.cssjs.compression": "1",
    "browsercache.cssjs.expires": "1",
    "browsercache.cssjs.lifetime": "31536000",
    "browsercache.cssjs.nocookies": "0",
    "browsercache.cssjs.cache.control": "1",
    "browsercache.cssjs.cache.policy": "cache_public_maxage",
    "browsercache.cssjs.etag": "0",
    "browsercache.cssjs.w3tc": "1",
    "browsercache.cssjs.replace": "0",
    "browsercache.html.compression": "1",
    "browsercache.html.last_modified": "1",
    "browsercache.html.expires": "1",
    "browsercache.html.lifetime": "3600",
    "browsercache.html.cache.control": "1",
    "browsercache.html.cache.policy": "cache_public_maxage",
    "browsercache.html.etag": "0",
    "browsercache.html.w3tc": "1",
    "browsercache.html.replace": false,
    "browsercache.other.last_modified": "1",
    "browsercache.other.compression": "1",
    "browsercache.other.expires": "1",
    "browsercache.other.lifetime": "31536000",
    "browsercache.other.nocookies": "0",
    "browsercache.other.cache.control": "1",
    "browsercache.other.cache.policy": "cache_public_maxage",
    "browsercache.other.etag": "0",
    "browsercache.other.w3tc": "1",
    "browsercache.other.replace": "0",
    "browsercache.replace.exceptions": [
        ""
    ],
    "mobile.configuration_overloaded": false,
    "mobile.enabled": false,
    "mobile.rgroups": {
        "high": {
            "theme": "",
            "enabled": false,
            "redirect": "",
            "agents": [
                "acer\\ s100",
                "android",
                "archos5",
                "bada",
                "bb10",
                "blackberry9500",
                "blackberry9530",
                "blackberry9550",
                "blackberry\\ 9800",
                "cupcake",
                "docomo\\ ht\\-03a",
                "dream",
                "froyo",
                "googlebot-mobile",
                "htc\\ hero",
                "htc\\ magic",
                "htc_dream",
                "htc_magic",
                "iemobile\/7.0",
                "incognito",
                "ipad",
                "iphone",
                "ipod",
                "kindle",
                "lg\\-gw620",
                "liquid\\ build",
                "maemo",
                "mot\\-mb200",
                "mot\\-mb300",
                "nexus\\ one",
                "nexus\\ 7",
                "opera\\ mini",
                "s8000",
                "samsung\\-s8000",
                "series60.*webkit",
                "series60\/5\\.0",
                "sonyericssone10",
                "sonyericssonu20",
                "sonyericssonx10",
                "t\\-mobile\\ mytouch\\ 3g",
                "t\\-mobile\\ opal",
                "tattoo",
                "touch",
                "webmate",
                "webos"
            ]
        },
        "low": {
            "theme": "",
            "enabled": false,
            "redirect": "",
            "agents": [
                "2\\.0\\ mmp",
                "240x320",
                "alcatel",
                "amoi",
                "asus",
                "au\\-mic",
                "audiovox",
                "avantgo",
                "benq",
                "bird",
                "blackberry",
                "blazer",
                "cdm",
                "cellphone",
                "danger",
                "ddipocket",
                "docomo",
                "dopod",
                "elaine\/3\\.0",
                "ericsson",
                "eudoraweb",
                "fly",
                "haier",
                "hiptop",
                "hp\\.ipaq",
                "htc",
                "huawei",
                "i\\-mobile",
                "iemobile",
                "iemobile\/7",
                "iemobile\/9",
                "j\\-phone",
                "kddi",
                "konka",
                "kwc",
                "kyocera\/wx310k",
                "lenovo",
                "lg",
                "lg\/u990",
                "lge\\ vx",
                "midp",
                "midp\\-2\\.0",
                "mmef20",
                "mmp",
                "mobilephone",
                "mot\\-v",
                "motorola",
                "msie\\ 10\\.0",
                "netfront",
                "newgen",
                "newt",
                "nintendo\\ ds",
                "nintendo\\ wii",
                "nitro",
                "nokia",
                "novarra",
                "o2",
                "openweb",
                "opera\\ mobi",
                "opera\\.mobi",
                "p160u",
                "palm",
                "panasonic",
                "pantech",
                "pdxgw",
                "pg",
                "philips",
                "phone",
                "playbook",
                "playstation\\ portable",
                "portalmmm",
                "\\bppc\\b",
                "proxinet",
                "psp",
                "qtek",
                "sagem",
                "samsung",
                "sanyo",
                "sch",
                "sch\\-i800",
                "sec",
                "sendo",
                "sgh",
                "sharp",
                "sharp\\-tq\\-gx10",
                "small",
                "smartphone",
                "softbank",
                "sonyericsson",
                "sph",
                "symbian",
                "symbian\\ os",
                "symbianos",
                "toshiba",
                "treo",
                "ts21i\\-10",
                "up\\.browser",
                "up\\.link",
                "uts",
                "vertu",
                "vodafone",
                "wap",
                "willcome",
                "windows\\ ce",
                "windows\\.ce",
                "winwap",
                "xda",
                "xoom",
                "zte"
            ]
        }
    },
    "referrer.configuration_overloaded": false,
    "referrer.enabled": false,
    "referrer.rgroups": {
        "search_engines": {
            "theme": "",
            "enabled": false,
            "redirect": "",
            "referrers": [
                "google\\.com",
                "yahoo\\.com",
                "bing\\.com",
                "ask\\.com",
                "msn\\.com"
            ]
        }
    },
    "common.edge": false,
    "common.support": "",
    "common.track_usage": false,
    "common.tweeted": false,
    "config.check": false,
    "config.path": "",
    "widget.latest.items": 3,
    "widget.latest_news.items": 5,
    "widget.pagespeed.enabled": false,
    "widget.pagespeed.key": "",
    "widget.pagespeed.show_in_admin_bar": false,
    "timelimit.email_send": 180,
    "timelimit.varnish_purge": 300,
    "timelimit.cache_flush": 600,
    "timelimit.cache_gc": 600,
    "timelimit.cdn_upload": 600,
    "timelimit.cdn_delete": 300,
    "timelimit.cdn_purge": 300,
    "timelimit.cdn_import": 600,
    "timelimit.cdn_test": 300,
    "timelimit.cdn_container_create": 300,
    "timelimit.domain_rename": 120,
    "timelimit.minify_recommendations": 600,
    "common.instance_id": 104444209,
    "common.force_master": true,
    "extensions.active": {
        "cloudflare": "w3-total-cache\/Extension_CloudFlare_Plugin.php",
        "wordpress-seo": "w3-total-cache\/Extension_WordPressSeo_Plugin.php",
        "newrelic": "w3-total-cache\/Extension_NewRelic_Plugin.php",
        "fragmentcache": "w3-total-cache\/Extension_FragmentCache_Plugin.php"
    },
    "extensions.active_frontend": {
        "cloudflare": "*",
        "wordpress-seo": "*"
    },
    "plugin.license_key": "",
    "plugin.type": "",
    "dbcache.memcached.persistant": true,
    "objectcache.memcached.persistant": true,
    "fragmentcache.enabled": false,
    "fragmentcache.memcached.persistant": true,
    "fragmentcache.groups": [],
    "pgcache.memcached.persistant": true,
    "pgcache.check.domain": true,
    "pgcache.cache.flush": false,
    "minify.memcached.persistant": true,
    "cdn.import.external": false,
    "cdncache.enabled": false,
    "browsercache.timestamp": "1470193692",
    "common.install": 0,
    "notes.wp_content_changed_perms": true,
    "notes.wp_content_perms": true,
    "notes.theme_changed": false,
    "notes.wp_upgraded": false,
    "notes.plugins_updated": false,
    "notes.cdn_upload": false,
    "notes.cdn_reupload": false,
    "notes.need_empty_pgcache": true,
    "notes.need_empty_minify": false,
    "notes.need_empty_objectcache": false,
    "notes.root_rules": true,
    "notes.rules": true,
    "notes.pgcache_rules_wpsc": true,
    "notes.support_us": true,
    "notes.no_curl": true,
    "notes.no_zlib": true,
    "notes.zlib_output_compression": true,
    "notes.no_permalink_rules": true,
    "notes.browsercache_rules_no404wp": true,
    "minify.auto.filename_length": 150,
    "minify.auto.disable_filename_length_test": false,
    "newrelic.enabled": false,
    "newrelic.account_id": "",
    "newrelic.application_id": 0,
    "notes.new_relic_page_load_notification": true,
    "newrelic.appname_prefix": "Child Site - ",
    "newrelic.merge_with_network": true,
    "newrelic.use_network_wide_id": false,
    "extensions.settings": [],
    "pgcache.bad_behavior_path": "",
    "newrelic": {
        "monitoring_type": "apm",
        "api_key": "",
        "apm.application_name": "",
        "accept.logged_roles": true,
        "accept.roles": [
            "contributor"
        ],
        "use_php_function": true,
        "cache_time": 5,
        "enable_xmit": false,
        "include_rum": true
    },
    "genesis.theme": {
        "wp_head": "0",
        "genesis_header": "1",
        "genesis_do_nav": "0",
        "genesis_do_subnav": "0",
        "loop_front_page": "1",
        "loop_terms": "1",
        "flush_terms": "1",
        "loop_single": "1",
        "loop_single_excluded": "",
        "loop_single_genesis_comments": "0",
        "loop_single_genesis_pings": "0",
        "sidebar": "0",
        "sidebar_excluded": "",
        "genesis_footer": "1",
        "wp_footer": "0",
        "reject_logged_roles": "1",
        "reject_logged_roles_on_actions": [
            "genesis_loop",
            "wp_head",
            "wp_footer"
        ],
        "reject_roles": [
            "administrator"
        ]
    },
    "feedburner": {
        "urls": ""
    },
    "fragmentcache": {
        "debug": false,
        "engine": "file",
        "file.gc": 3600,
        "file.locking": false,
        "memcached.servers": [
            "127.0.0.1:11211"
        ],
        "lifetime": 180
    }
}