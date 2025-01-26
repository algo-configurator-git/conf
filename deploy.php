<?php

namespace Deployer;

require 'recipe/common.php';

// Устанавливаем настройки
set('application', 'constructor');
set('repository', 'git@github.com:fzthkm/constructor.git');
set('git_tty', true);
set('branch', 'main');
set('shared_files', ['.env']);
set('shared_dirs', ['writable/uploads']);
set('writable_dirs', ['writable', 'writable/uploads']);
set('exclude', ['deploy.php', '.git', '.gitignore']);

// Задаём хосты
host('production')
    ->setHostname('178.159.44.61')
    ->setRemoteUser('root')
    ->setPort(2200)
    ->setIdentityFile('/Users/vhkmit/.ssh/id_rsa')
    ->set('deploy_path', '/var/www/constructor');

// Добавляем свои задачи
task('deploy:clear_cache', function () {
run('php {{release_path}}/spark cache:clear');
});

// Добавляем свои задачи в стандартный deploy
after('deploy:vendors', 'deploy:clear_cache');
