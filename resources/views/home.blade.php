@extends('layouts.app')
@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <h1 style="text-align: center;"> You are logged in!</h1>    
            </div>
            </div>
        </div>
    </div>
</div> -->

<style>
      body {
        margin: 0;
        font: 14px sans-serif;
      }
      .header {
        background: #26699a;
        height: 60px;
        position: relative;
      }
      .header .logo {
        position: absolute;
        left: 16px;
      }
      .header h1 {
        margin: 0;
        padding: 14px 0;
        color: #f0f6fb;
      }
      .header .buttons.right {
        position: absolute;
        right: 16px;
        top: 22px;
      }
      .header .buttons a {
        color: #fff;
        text-decoration: none;
        margin-left: 10px;
      }
      div {
        box-sizing: border-box;
      }
      h1.title {
        font-weight: 300;
        margin: 30px auto;
        text-align: center;
      }
      h2 {
        font-weight: 300;
        margin: 10px auto 30px auto;
        text-align: center;
      }
      .tools {
        width: 100%;
        padding: 30px;
        background: #edf0f1;
        margin-bottom: 1px;
      }
      .tools.blocks a {
        display: inline-block;
        box-sizing: border-box;
        width: 100px;
        height: 90px;
        position: relative;
        margin: 2px;
        border: 1px solid transparent;
        cursor: pointer;
        border-radius: 3px;
      }
      .tools.blocks a span {
        font-size: 14px;
        text-align: center;
        display: block;
        bottom: 12px;
        position: absolute;
        width: 100%;
        color: #535557;
      }
      .tools.blocks a i {
        position: absolute;
        top: 12px;
        width: 100%;
        text-align: center;
        font-size: 30px;
        color: #a8adb1;
      }
      .tools.blocks a.obstacle span {
        bottom: 9px;
        font-size: 12px;
      }
      .tools.blocks a:hover {
        background: #fff;
        border-color: #dadedf;
      }
      .tools.blocks a:hover span {
        color: #0fa1ca;
      }
      .tools.blocks a:hover i {
        color: #0fa1ca;
      }
      .tools.large-blocks a {
        display: inline-block;
        box-sizing: border-box;
        width: 240px;
        height: 90px;
        position: relative;
        margin: 2px;
        border: 1px solid transparent;
        cursor: pointer;
        border-radius: 3px;
        background: #fff;
        border-color: #dadedf;
      }
      .tools.large-blocks a span {
        font-size: 14px;
        display: block;
        top: 18px;
        left: 80px;
        position: absolute;
        width: 150px;
        color: #535557;
      }
      .tools.large-blocks a p {
        color: #a8adb1;
        font-size: 12px;
        left: 80px;
        top: 28px;
        position: absolute;
        padding-right: 10px;
      }
      .tools.large-blocks a i {
        position: absolute;
        left: 16px;
        line-height: 88px;
        width: 50px;
        text-align: center;
        font-size: 24px;
        color: #dbe4ec;
        z-index: 5;
      }
      .tools.large-blocks a .circle {
        width: 50px;
        height: 50px;
        display: block;
        content: "";
        background: #26699a;
        border-radius: 50%;
        position: absolute;
        top: 20px;
        left: 16px;
      }
      .tools.large-blocks a:hover {
        background: #f0f6fb;
        border-color: #dbe4ec;
      }
      .tools.large-blocks a:hover * {
        color: #0fa1ca;
      }
      .tools.large-blocks a:hover .circle {
        background: #dbe4ec;
      }
      .tools.large-blocks a.procedures i {
        line-height: 92px;
      }
    </style>

<!-- DASHBOARD -->
<div class="header">
      <div class="logo">
        <h1>logo</h1>
      </div>
      <div class="buttons right">
        <a href="#">Settings</a>
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
      </div>
    </div>

    <div class="fullscreen dashboard">
      <div class="container">
        <h1 class="title center">Welcome to the Web Application</h1>

        <div class="tools blocks">
          <h2>Application Tools</h2>
          <a ng-href="/#/search">
            <i class="fa fa-search"></i>
            <span>Search</span>
          </a>
          <a ui-sref="data-manager">
            <i class="fa fa-thumbs-o-up"></i>
            <span>Approval</span>
          </a>
          <a ui-sref="notam-search">
            <i class="fa fa-exclamation-triangle"></i>
            <span>NOTAM</span>
          </a>
          <a ng-href="/#/chart-manager">
            <i class="fa fa-map-o"></i>
            <span>Chart</span>
          </a>
          <a ng-href="/#/terminal-procedures">
            <i class="fa fa-plane"></i>
            <span>Procedure</span>
          </a>
          <a ng-href="/#/customer-profile">
            <i class="fa fa-user"></i>
            <span>Customer</span>
          </a>
          <a ng-href="/#/airport-surveillance">
            <i class="fa fa-binoculars"></i>
            <span>Surveilliance</span>
          </a>
          <a class="obstacle" ng-href="/#/obstacle/upload">
            <i class="fa fa-tree"></i>
            <span>Obstacle Uploader</span>
          </a>
        </div>

        <div class="tools large-blocks">
          <h2>Application Tools</h2>

          <a ng-href="/#/search">
            <i class="fa fa-search"></i>
            <div class="circle"></div>
            <span>Data Search</span>
            <p>Search all entities within the database.</p>
          </a>
          <a ui-sref="data-manager">
            <i class="fa fa-thumbs-o-up"></i>
            <div class="circle"></div>
            <span>Data Approval</span>
            <p>Manage pending updates to the database.</p>
          </a>
          <a ui-sref="notam-search">
            <i class="fa fa-exclamation-triangle"></i>
            <div class="circle"></div>
            <span>NOTAM Manager</span>
            <p>View and apply digital NOTAMs.</p>
          </a>
          <a ng-href="/#/chart-manager">
            <i class="fa fa-map-o"></i>
            <div class="circle"></div>
            <span>Chart Manager</span>
            <p>Create and manage chart exports.</p>
          </a>
          <a class="procedures" ng-href="/#/terminal-procedures">
            <i class="fa fa-plane"></i>
            <div class="circle"></div>
            <span>Terminal Procedures</span>
            <p>Create and manage procedures.</p>
          </a>
          <a ng-href="/#/customer-profile">
            <i class="fa fa-user"></i>
            <div class="circle"></div>
            <span>Customer Profiles</span>
            <p>Manage customer and aircraft profiles.</p>
          </a>
          <a ng-href="/#/airport-surveillance">
            <i class="fa fa-binoculars"></i>
            <div class="circle"></div>
            <span>Airport Surveilliance</span>
            <p>Manage airport surveilliance list.</p>
          </a>
          <a class="obstacle" ng-href="/#/obstacle/upload">
            <i class="fa fa-tree"></i>
            <div class="circle"></div>
            <span>Obstacle Uploader</span>
            <p>Use web-based upload tool for obstacles.</p>
          </a>
        </div>
      </div>
    </div>

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
    />

@endsection
