<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

        <div class="container">
                
         <div class="jumbotron">
             <h3>Food orders</h3>
             <br>
             <br>
                <table class="table table-dark">
                 

                    <th>Name</th>
                    <th>Address</th>
                    <th>Food orders</th>
                    <th>Phone Number</th>
                    
                     
                     
                        <tr>
                    
                        <td>Navodya Sathsarani</td>
                        <td>Kurunegala,Kalugamuwa</td>
                        <td>divine cake 1,pancake 1</td>
                      
            <form action="{{ url('foodorders') }}" method="post">
              {{csrf_field()}}
              <div class="form-group">
                
                <td> <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile number"> </td>
              </div>
              <td><button type="submit" class="btn btn-primary">Send SMS</button> </td>
          </form>
                  
                     
                        </tr>
                        
            
                    
                      </table>

         </div>
        </div>


    
</body>
</html>