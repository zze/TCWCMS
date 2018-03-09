
@extends('admin.layouts.layout')

          @section('content')
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
              <h1 class="h2">Dashboard</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                  <button class="btn btn-sm btn-outline-secondary">Share</button>
                  <button class="btn btn-sm btn-outline-secondary">Export</button>
                </div>
              </div>
            </div>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

          <h2>Players Online</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm table-hover">
              <thead>
                <tr>
                  <th>Character Name</th>
                  <th>Location</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="/admin/characters/Juthien/view">Juthien</a></td>
                  <td>Elywnn Forest</td>
                </tr>
                <tr>
                  <td><a href="/admin/characters/Kleetis/view">Kleetis</a></td>
                  <td>Battlegrounds</td>
                </tr>
                <tr>
                  <td><a href="/admin/characters/Orcyou/view">Orcyou</a></td>
                  <td>Orgrimmar</td>
                </tr>
              </tbody>
            </table>
          </div>
@stop