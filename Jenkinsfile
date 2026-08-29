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

        stage('Build Assets') {
            steps {
                sh 'npm run build'
            }
        }

        stage('Deploy') {
            steps {
                sh 'echo "Deploying to staging..."'
                sshPublisher(publishers: [
                    sshPublisherDesc(
                        configName: 'hosting-indonesia-1',
                        transfers: [
                            sshTransfer(
                                sourceFiles: 'public/build/**',
                                removePrefix: 'public/build',
                                remoteDirectory: 'public/build',
                                execCommand: 'cd /home/barizaloka/barizaloka.id && rm -rf public/build/* && git pull origin master',
                                execTimeout: 120000,
                                usePty: true
                            )
                        ]
                    )
                ])
            }
        }
    }
}