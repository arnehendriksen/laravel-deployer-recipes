<?php

namespace Deployer;

desc('Execute artisan opcache:clear');
task('artisan:opcache:clear', artisan('opcache:clear'));

desc('Execute artisan opcache:compile');
task('artisan:opcache:compile', artisan('opcache:compile'));