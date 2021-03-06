<?php

return [
    'widgets' => [
        'title_browsers'                         => 'Browsers',
        'description_browsers'                   => 'This report lets you see the number of visits from different browsers people use to reach your site.',
        'browsers_report_height'                 => 'Chart height',
        'browsers_report_height_validation'      => 'Please specify the chart height as an integer value.',
        'title_toppages'                         => 'Top Pages',
        'noresult_toppages'                      => 'There were no pageviews in the selected interval.',
        'toppages_number'                        => 'Number of pages to display',
        'title_traffic_goal'                     => 'Traffic Goal',
        'traffic_goal_days'                      => 'Period',
        'traffic_goal_goal'                      => 'Traffic goal, visits',
        'traffic_goal_goal_description'          => 'Specify the total number of desired visits per the period defined with the Period parameter',
        'traffic_goal_goal_validation'           => 'Please specify the traffic goal as an integer value.',
        'title_traffic_overview'                 => 'Traffic overview',
        'title_traffic_sources'                  => 'Traffic Sources',
        'description_traffic_sources'            => 'The traffic sources report displays the source of referrals to your website.',
        'traffic_sources_report_size'            => 'Chart radius',
        'traffic_sources_report_size_validation' => 'Please specify the chart size as an integer value',
        'traffic_sources_center'                 => 'Center the chart',
        'traffic_sources_number'                 => 'Number of sources to display',
        'display_description'                    => 'Display the report description',
        'days_to_display'                        => 'Days to display',
        'legend_as_table'                        => 'Display legend as a table',
    ],
    'permissions' => [
        'tab'      => 'Google Analytics Plugin',
        'settings' => 'Settings access',
        'widgets'  => 'View dashboard widgets',
    ],
    'strings' => [
        'plugin_desc'    => 'Provides the Google Analytics tracking and reporting.',
        'notconfigured'  => 'Google Analytics API access is not configured. Please configure it on the System / Settings / Google Analytics page.',
        'keynotuploaded' => 'Google Analytics API private key is not uploaded. Please configure Google Analytics access on the System / Settings / Google Analytics page.',
        'tracker'        => 'Google Analytics tracker',
        'tracker_desc'   => 'Outputs a tracking code on a page.',
        'settings_desc'  => 'Configure Google Analytics API code and tracking options.',
        'page_url'       => 'Page URL',
        'pageviews'      => 'Pageviews',
        'current'        => 'Current',
        'goal'           => 'Goal',
        'streams'        => [
            'web'     => 'Web',
            'android' => 'Android',
            'ios'     => 'iOS'
        ]
    ],
    'errors' => [
        'invalid_dimension'     => 'That does not appear to be a valid analytics dimension',
    ],
    'settings' => [
        'project_name'                => 'Google API Project name',
        'client_id'                   => 'Google API Client ID',
        'app_email'                   => 'Email address',
        'property_id'                 => 'Property ID',
        'gapi_key'                    => 'Private key',
        'web_measurement_id'          => 'Web Measurement ID',
        'anonymize_ip'                => 'Anonymize IP',
        'domain_name'                 => 'Domain name',
        'project_name_comment'        => 'The name you assigned to the project when created in Google API Console',
        'client_id_comment'           => 'You can find the Client ID on the project page in Google API Console',
        'app_email_comment'           => 'The email address generated by Google API Console',
        'property_id_comment'         => 'You can find it on the Google Analytics Admin / Property Settings page',
        'gapi_key_comment'            => 'The private key file you downloaded from Google API Console',
        'web_measurement_id_comment'  => 'You can find the Web Measurement ID on the Admin / Streams page in the Web tab',
        'anonymize_ip_comment'        => 'Activate the IP anonymization for visitors',
        'domain_name_comment'         => 'Specify the domain name you are going to track',
        'force_ssl'                   => 'Force SSL',
        'force_ssl_comment'           => 'Always use SSL to send data to Google',
        'hide_not_set'                => 'Hide Not Set?',
    ],
    'linechart'   => [
        'label'                 => 'Google Analytics custom line chart',
        'show_legend'           => 'Show Legend?'
    ],
    'barchart'   => [
        'label'                 => 'Google Analytics custom bar chart',
        'widget_title'          => 'Widget title',
        'bar_chart'             => 'Bar Chart',
        'widget_title_required' => 'The Widget Title is required.',
        'dimension'             => 'Dimension',
        'orderby_dimension'     => 'Dimension to order by',
        'metric'                => 'Metric',
        'invalid_metric'        => 'That does not appear to be a valid analytics metric.',
        'chart_height'          => 'Chart height',
        'invalid_chart_height'  => 'Please specify the chart height as an integer value.',
        'legend_as_table'       => 'Display legend as a table',
        'results_to_display'    => 'Results to display',
        'zero_displays_all'     => 'A value of 0 will display all results.',
        'raport_description'    => 'Report description',
    ],
    'percentagechart' => [
        'label'              => 'Google Analytics custom percentage chart',
        'widget_title'       => 'Widget title',
        'percentage_chart'   => 'Percentage Chart',
        'title_required'     => 'The Widget Title is required.',
        'dimension'          => 'Dimension',
        'metric'             => 'Metric',
        'invalid_metric'     => 'That does not appear to be a valid analytics metric.',
        'dimension_label'    => 'Dimension label',
        'metric_label'       => 'Metric label',
        'results_to_display' => 'Results to display',
        'zero_displays_all'  => 'A value of 0 will display all results.',
    ],
    'piechart' => [
        'label'              => 'Google Analytics custom pie chart',
        'widget_title'       => 'Widget title',
        'pie_chart'          => 'Pie Chart',
        'title_required'     => 'The Widget Title is required.',
        'dimension'          => 'Dimension',
        'metric'             => 'Metric',
        'invalid_metric'     => 'That does not appear to be a valid analytics metric.',
        'chart_radius'       => 'Chart radius',
        'chart_size_invalid' => 'Please specify the chart size as an integer value.',
        'center_chart'       => 'Center the chart',
        'legend_as_table'    => 'Display legend as a table',
        'display_total'      => 'Display total',
        'results_to_display' => 'Results to display',
        'zero_displays_all'  => 'A value of 0 will display all results.',
        'report_description' => 'Report description',
    ],
];
