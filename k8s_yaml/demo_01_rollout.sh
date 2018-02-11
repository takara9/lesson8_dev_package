#!/bin/bash

echo "*** Current  ver-1.0 ***"
sleep 30
echo

echo "*** Rollout  ver-1.1 ***"
echo "kubectl apply -f s06_web-app-2-blue.yml"
kubectl apply -f s06_web-app-2-blue.yml
sleep 30
echo

echo "*** Rollback ver-1.0 ***"
echo "kubectl rollout undo deployment web-app"
kubectl rollout undo deployment web-app
echo









