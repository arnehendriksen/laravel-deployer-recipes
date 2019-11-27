<?php

namespace Deployer;

desc('Execute artisan route:clear');
task('artisan:route:clear', artisan('route:clear'));
