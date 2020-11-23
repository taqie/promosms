pipeline {
    //agent any
    //stages {
    //    stage('build') {
    //        steps {
              //build '../archelp/master'
              //  build job: 'archelp'
              //  echo 'hello wrodddld'
              //  echo 'hello wrodddld
     //       }
    //    }
    //}
    agent {
        docker { image 'node:14-alpine' }
    }
    stages {
        stage('Test') {
            steps {
                sh 'node --version'
            }
        }
    }
}






