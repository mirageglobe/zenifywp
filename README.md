# ZenifyVagrant #

- author/site : Jimmy MG Lim (mirageglobe@gmail.com) / www.mirageglobe.com
- source : https://github.com/mirageglobe/zenifyvagrant

ZenifyVagrant is a vagrant based development enviroment for wordpress and other projects. it is simple to use, preconfigured debian box that loads up a fully working of wordpress as an example. as a developer, all that is needed is your theme file cloned into vmsharesource/themes. a few samples can be seen in there already.

# To use #

ensure that the following dependancies are present,
- vagrant 1.9+
- virtualbox 5.0+
- git 2.7+

to setup, clone this repo
```
  $ git clone git@github.com:mirageglobe/zenifywp-devenv.git
```

then go into the folder (which is a separate git repo)
```
  $ cd pathtorepo/vmsharesource/themes
```

in this folder, clone your theme repo (such as zenifywp) into themes and it should look like the following
```
  $ ../pathtorepo/vmsharesource/themes/zenifywp
  $ ../pathtorepo/vmsharesource/themes/twentytwelve
```

to start the server
```
make run
```

if you update the vmbootstrap.sh file, you can refresh the vagrantvm by:
```
  $ sh vagrant.refresh.sh
```

# Guidelines #

a few points to note before submitting PR :

- ensure this is tested on debian (as indicated in vagrantfile)
- ensure that themecheck plugin is installed and run against the theme
- upload the themecheck xml in vmsourcefiles and import into your wordpress to test

## installation fails with virtual box guest additions

if installation fails for vagrant, vb guest plugin will need to be installed.
ref: https://stackoverflow.com/questions/22717428/vagrant-error-failed-to-mount-folders-in-linux-guest
```
  $ vagrant plugin install vagrant-vbguest
```

and then reload
```
$ sh vagrant.refresh.sh
$ sh vagrant.run.sh
```

# Roadmap #

- add option switch for footer helper navigations i.e. top / home / prev next
- update to use debian stretch box - curl need to be installed and mariadb keys need to be changed
- [done] added themecheck test data
- [done] copy and sync mysql login data - http://serverfault.com/questions/103412/how-to-change-my-mysql-root-password-back-to-empty/103423#103423
- [done] copy and install wordpress
- [done] sync the folder from host to guest

# License

Copyright 2015 Jimmy MG Lim (mirageglobe@gmail.com)

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

License Breakdown: https://tldrlegal.com/license/apache-license-2.0-(apache-2.0)
