# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant::Config.run do |config|
  # Every Vagrant virtual environment requires a box to build off of.
  config.vm.box = "centos64-min"

  # The url from where the 'config.vm.box' box will be fetched if it
  # doesn't already exist on the user's system.
  config.vm.box_url = "http://dl.dropbox.com/u/9227672/CentOS-6.0-x86_64-netboot-4.1.6.box"

  config.vm.forward_port 80, 8080

  config.vm.provision :puppet do |puppet|
    puppet.manifests_path = ".puppet/manifests"
    puppet.manifest_file = "vagrant.pp"
    puppet.module_path  = ".puppet/modules"
  end

end
