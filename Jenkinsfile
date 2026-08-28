pipeline {
    agent {
        dockerfile {
            filename '.docker/ci/Dockerfile'
            args '-u 0 --cgroupns=host'
        }
    }

    stages {
        stage('Check Everything') {
            steps {
                sh 'composer --version'
                sh 'php --version'
                sh 'ls -a'
            }
        }

        stage('Install') {
            steps {
                sh 'composer install'
                sh 'npm install'
            }
        }

        stage('Deploy to Staging') {
            when {
                branch 'staging'
            }
            steps {
                sh 'echo "Deploying to staging..."'

                sh '''
                    ssh contohdesain.web.id@ssh.gb.stackcp.com && ls -a && exit
                '''
            }
        }

        stage('Deploy to Production') {
            when {
                anyOf {
                    branch 'main'
                    branch 'master'
                }
            }
            steps {
                sh 'echo "Deploying to production..."'
            }
        }
    }
}