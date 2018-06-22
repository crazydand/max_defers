<?php
    class Domain
    {
        public $notification;
        public $list;
        private $domain_validate = '/^([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/';
        public function TxtDomain($var)
        {
            if (!preg_match($this->domain_validate,$var))
            {   
                return $this->notification = "Domain must be valid";
            }
            else
            {
                return $this->GetDefersList($var);
            }
        }
        
        public function GetDefersList($domain)
        {
            //-------------DSH
            ///usr/bin/dsh -c -F 30 -M -g cpanel_production_au -- sudo ls -lah /var/cpanel/email_send_limits/ | grep max_deferfail | awk '{print $10}' | awk '{gsub("max_deferfail_", ""); print}'
            
            $this->list = shell_exec("grep ".$domain." defered_list.txt");
            if(strlen($this->list) == 0)
            {
                return $this->notification = "NOT LISTED";
            }
            else
            {
                $this->notification = "".$domain." is on Max Defers list";
            }
        }
        public function RemoveDefer($domain)
        {
        }
    }
?>