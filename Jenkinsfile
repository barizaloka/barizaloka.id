pipeline {
    agent {
        dockerfile {
            filename 'Dockerfile'
            args '-u 0'
        }
    }

    stages {
        stage('Check Evrything') {
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
                    sh jenkins@jenkins:~$ ssh contohdesain.web.id@ssh.gb.stackcp.com && exit
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

    post {
        always {
            sh 'rm -f my-app'
        }
    }
}