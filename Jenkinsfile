pipeline {
  agent any
  stages {
    stage('PreBuild') {
      steps {
        sh 'php -v'
        sh '/usr/local/opt/php@7.2/bin/php /Users/mablat/composer/composer install'
        sh '/usr/local/opt/php@7.2/bin/php ./vendor/bin/phpunit'
        sh '/usr/local/bin/terminal-notifier -title ProjectX -subtitle "Prebuilt" -message "Build Successfull" -appIcon /Users/mablat/.jenkins/resources/success.png'
      }
    }

  }
}
