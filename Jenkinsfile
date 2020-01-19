pipeline {
agent any
    stages {
        stage('Build') {
            steps {
                   sh '/usr/local/opt/php@7.2/bin/php /Users/mablat/composer/composer install'
                   sh '/usr/local/opt/php@7.2/bin/php ./vendor/bin/phpunit'
            }
        }
    }
}
