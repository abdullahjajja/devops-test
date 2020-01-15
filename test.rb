package 'httpd' do
    action :install
end
service "httpd" do
  action [:enable, :start]
end
file '/etc/motd'
    owner 'root'
    group 'root'
    mode '0644'
    content 'Hello world'
end

cron_d 'daily-report' do
  minute  45
  hour    5
  command '/bin/echo $(date) >> /tmp/crontab.log'
  user    'root'
end

execute 'timezonesetting' do
  command 'timedatectl set-timezone Europe/London'
end

user 'abdullah.khan' do
  password '$1$5Cmr1wDb$mXZ1c77QtfkLnJVanV1U4/'
end
