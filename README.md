# viralink
sending data from viralink server to a php web server & saving data to a mysql and then showing results with pagination
you must change this values with your own myaql values : host,username,dbname,password,tablename
you need a web server with php version 7.4 and above
you can edit another values in codes if you know enough information about it
on the viralink server you must create 2 object first >>> transformation script second >>> External rest api call
you dont need to change values on the transformation script
you need insert host address and full directory on the endpoint url pattern External rest api call
drag a connection from save timeseries to transformation script and from transformation script to External rest api call
you can active debug mode to see logs 
