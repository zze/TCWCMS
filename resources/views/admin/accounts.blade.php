
@extends('admin.layouts.layout')

          @section('content')
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
              <h1 class="h2">Accounts</h1>
            </div>

            <p><button class="btn btn-success">Create New Account</button></p>

            <div class="table-responsive">
              <table class="table table-striped table-sm table-hover">
                <thead>
                  <tr>
                    <th>Account ID</th>
                    <th>Username</th>
                    <th>Registered Since</th>
                    <th>Last Login</th>
                    <th>GM Level</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td><a href="/admin/accounts/1/view">ex0r</a></td>
                    <td>12/28/2008</td>
                    <td>Online Now</td>
                    <td>3</td>
                    <td>Edit | Ban | Unban | Delete</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><a href="/admin/accounts/1/view">ex0r</a></td>
                    <td>12/28/2008</td>
                    <td>Online Now</td>
                    <td>3</td>
                    <td>Edit | Ban | Unban | Delete</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><a href="/admin/accounts/1/view">ex0r</a></td>
                    <td>12/28/2008</td>
                    <td>Online Now</td>
                    <td>3</td>
                    <td>Edit | Ban | Unban | Delete</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><a href="/admin/accounts/1/view">ex0r</a></td>
                    <td>12/28/2008</td>
                    <td>Online Now</td>
                    <td>3</td>
                    <td>Edit | Ban | Unban | Delete</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><a href="/admin/accounts/1/view">ex0r</a></td>
                    <td>12/28/2008</td>
                    <td>Online Now</td>
                    <td>3</td>
                    <td>Edit | Ban | Unban | Delete</td>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><a href="/admin/accounts/1/view">ex0r</a></td>
                    <td>12/28/2008</td>
                    <td>Online Now</td>
                    <td>3</td>
                    <td>Edit | Ban | Unban | Delete</td>
                  </tr>
                </tbody>
              </table>
            </div>
@stop