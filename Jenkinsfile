pipeline {
    agent {
        dockerfile {
            filename '.docker/ci/Dockerfile'
            args '-u 0'
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

                sshagent(credentials: ['ssh-staging-key']) {
                    sh '''
                        mkdir -p ~/.ssh
                        ssh-keyscan -H ssh.gb.stackcp.com >> ~/.ssh/known_hosts 2>/dev/null || true
                        ssh -T -o StrictHostKeyChecking=no contohdesain.web.id@ssh.gb.stackcp.com 'ls -a'
                    '''
                }
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