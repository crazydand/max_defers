# max_defers
max_defers_removal

RUN THIS ON CRON

* * * * * rm -rf /home/support/web/max-defer.au.dstier2.com/public_html/defered_list.txt && ssh dan.d@jumpoff1.per01.ds.network "/usr/bin/dsh -c -F 30 -M -g cpanel_production_au -- sudo ls -lah /var/cpanel/email_send_limits/ | grep max_deferfail" | awk '{print $10}' | awk '{gsub("max_deferfail_",""); print}' > /home/support/web/max-defer.au.dstier2.com/public_html/defered_list.txt
