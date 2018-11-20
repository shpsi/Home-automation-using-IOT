flag=0;
zero=0;
first=1;
while [ true ]; do
  if [ $flag -eq $zero  ]
  then
     flag=1;
     dt=`date +%d`;
     echo $dt > startDay.txt;
     wget http://172.20.43.129/smartLight/smartLightLocal/initLocal.php ;
     
  fi;
  DATE=`date +%d`;
  if [ $DATE -eq $first ]
  then
    flag=0;
  fi;
  sleep 60; 
done
