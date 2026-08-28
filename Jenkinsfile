pipeline {
    agent {
        dockerfile {
            filename 'Dockerfile'
            dir '.docker/ci'
            args '-u 0'
        }
    }

    stages {
        stage('Install & Build Assets') {
            steps {
                // 1. Install vendor Composer agar file CSS Livewire/Flux tersedia
                sh 'composer install --no-dev --prefer-dist --optimize-autoloader'
                
                // 2. Build aset Vite/Tailwind
                sh 'npm ci'
                sh 'npm run build'

                // 3. Kompres folder aset public/build
                sh 'tar -czf assets.tar.gz public/build'
            }
        }
    }
}