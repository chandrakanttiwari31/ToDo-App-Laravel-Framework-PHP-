
<form action="loginsubmit" method="post">
@csrf
<table >
          <tr>
              <td>UserName<td>
              <td> <input type="email" name="email"  /><td>
          </tr>

          <tr>
              <td>Password<td>
              <td> <input type="password" name="pass"  /><td>
          </tr>
          <tr>
              <td><td>
              <td> <input type="submit" name="login"/><td>
              <br/>
              {{session('error')}}
          </tr>
           </table>

</form>