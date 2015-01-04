Zorbus Admin Theme Bundle
=========================

A theme for the [Sonata Admin Bundle](http://sonata-project.org/bundles/admin/2-3/doc/index.html).

This theme is inspired on the [SB Admin 2](http://startbootstrap.com/template-overviews/sb-admin-2/)

Installation
------------

Add the bundle to composer.json and enable it on the AppKernel.

Configuration
-------------

Change the defaults of sonata admin to use the templates provided by the bundle.
On config.yml

```
sonata_admin:
    templates:
        user_block:           ZorbusAdminThemeBundle:Core:user_block.html.twig
        add_block:            ZorbusAdminThemeBundle:Core:add_block.html.twig
        layout:               ZorbusAdminThemeBundle::standard_layout.html.twig
        ajax:                 ZorbusAdminThemeBundle::ajax_layout.html.twig
        dashboard:            ZorbusAdminThemeBundle:Core:dashboard.html.twig
        search:               ZorbusAdminThemeBundle:Core:search.html.twig
        list:                 ZorbusAdminThemeBundle:CRUD:list.html.twig
        filter:               ZorbusAdminThemeBundle:Form:filter_admin_fields.html.twig
        show:                 ZorbusAdminThemeBundle:CRUD:show.html.twig
        show_compare:         ZorbusAdminThemeBundle:CRUD:show_compare.html.twig
        edit:                 ZorbusAdminThemeBundle:CRUD:edit.html.twig
        preview:              ZorbusAdminThemeBundle:CRUD:preview.html.twig
        history:              ZorbusAdminThemeBundle:CRUD:history.html.twig
        acl:                  ZorbusAdminThemeBundle:CRUD:acl.html.twig
        history_revision_timestamp:  ZorbusAdminThemeBundle:CRUD:history_revision_timestamp.html.twig
        action:               ZorbusAdminThemeBundle:CRUD:action.html.twig
        select:               ZorbusAdminThemeBundle:CRUD:list__select.html.twig
        list_block:           ZorbusAdminThemeBundle:Block:block_admin_list.html.twig
        search_result_block:  ZorbusAdminThemeBundle:Block:block_search_result.html.twig
        short_object_description:  ZorbusAdminThemeBundle:Helper:short-object-description.html.twig
        delete:               ZorbusAdminThemeBundle:CRUD:delete.html.twig
        batch:                ZorbusAdminThemeBundle:CRUD:list__batch.html.twig
        batch_confirmation:   ZorbusAdminThemeBundle:CRUD:batch_confirmation.html.twig
        inner_list_row:       ZorbusAdminThemeBundle:CRUD:list_inner_row.html.twig
        base_list_field:      ZorbusAdminThemeBundle:CRUD:base_list_field.html.twig
        pager_links:          ZorbusAdminThemeBundle:Pager:links.html.twig
        pager_results:        ZorbusAdminThemeBundle:Pager:results.html.twig
        tab_menu_template:    ZorbusAdminThemeBundle:Core:tab_menu_template.html.twig
    assets:
        stylesheets:
            - bundles/zorbusadmintheme/css/bootstrap.min.css
            - bundles/zorbusadmintheme/css/plugins/metisMenu/metisMenu.min.css
            - bundles/zorbusadmintheme/css/plugins/timeline.css
            - bundles/zorbusadmintheme/css/sb-admin-2.css
            - bundles/zorbusadmintheme/css/plugins/morris.css
            - bundles/zorbusadmintheme/font-awesome/css/font-awesome.min.css
        javascripts:
            - bundles/zorbusadmintheme/js/jquery.js
            - bundles/zorbusadmintheme/js/bootstrap.min.js
            - bundles/zorbusadmintheme/js/plugins/metisMenu/metisMenu.min.js
            - bundles/zorbusadmintheme/js/sb-admin-2.js

sonata_doctrine_orm_admin:
    templates:
        form:
            - ZorbusAdminThemeBundle:Form:form_admin_fields.html.twig
        filter:
            - ZorbusAdminThemeBundle:Form:filter_admin_fields.html.twig
        types:
            list:
                array:      ZorbusAdminThemeBundle:CRUD:list_array.html.twig
                boolean:    ZorbusAdminThemeBundle:CRUD:list_boolean.html.twig
                date:       ZorbusAdminThemeBundle:CRUD:list_date.html.twig
                time:       ZorbusAdminThemeBundle:CRUD:list_time.html.twig
                datetime:   ZorbusAdminThemeBundle:CRUD:list_datetime.html.twig
                text:       ZorbusAdminThemeBundle:CRUD:base_list_field.html.twig
                trans:      ZorbusAdminThemeBundle:CRUD:list_trans.html.twig
                string:     ZorbusAdminThemeBundle:CRUD:base_list_field.html.twig
                smallint:   ZorbusAdminThemeBundle:CRUD:base_list_field.html.twig
                bigint:     ZorbusAdminThemeBundle:CRUD:base_list_field.html.twig
                integer:    ZorbusAdminThemeBundle:CRUD:base_list_field.html.twig
                decimal:    ZorbusAdminThemeBundle:CRUD:base_list_field.html.twig
                identifier: ZorbusAdminThemeBundle:CRUD:base_list_field.html.twig
                currency:   ZorbusAdminThemeBundle:CRUD:list_currency.html.twig
                percent:    ZorbusAdminThemeBundle:CRUD:list_percent.html.twig
                choice:     ZorbusAdminThemeBundle:CRUD:list_choice.html.twig
                url:        ZorbusAdminThemeBundle:CRUD:list_url.html.twig

            show:
                array:      ZorbusAdminThemeBundle:CRUD:show_array.html.twig
                boolean:    ZorbusAdminThemeBundle:CRUD:show_boolean.html.twig
                date:       ZorbusAdminThemeBundle:CRUD:show_date.html.twig
                time:       ZorbusAdminThemeBundle:CRUD:show_time.html.twig
                datetime:   ZorbusAdminThemeBundle:CRUD:show_datetime.html.twig
                text:       ZorbusAdminThemeBundle:CRUD:base_show_field.html.twig
                trans:      ZorbusAdminThemeBundle:CRUD:show_trans.html.twig
                string:     ZorbusAdminThemeBundle:CRUD:base_show_field.html.twig
                smallint:   ZorbusAdminThemeBundle:CRUD:base_show_field.html.twig
                bigint:     ZorbusAdminThemeBundle:CRUD:base_show_field.html.twig
                integer:    ZorbusAdminThemeBundle:CRUD:base_show_field.html.twig
                decimal:    ZorbusAdminThemeBundle:CRUD:base_show_field.html.twig
                currency:   ZorbusAdminThemeBundle:CRUD:base_currency.html.twig
                percent:    ZorbusAdminThemeBundle:CRUD:base_percent.html.twig
                choice:     ZorbusAdminThemeBundle:CRUD:show_choice.html.twig
                url:        ZorbusAdminThemeBundle:CRUD:show_url.html.twig
```

For last, install the assets:

$ php app/console assets:install