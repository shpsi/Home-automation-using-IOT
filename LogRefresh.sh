while [ true ]; do
  sudo chmod 777 *;
  rm logs.txt;
  touch logs.txt;
  chmod 777 *;
  sleep 432000;
done
