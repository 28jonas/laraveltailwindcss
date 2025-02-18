<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="">

@include('layouts.partials.header')

<body data-layout-mode="light"
      class="bg-gray-100 dark:bg-gray-900 bg-[url('../images/bg-body.png')] dark:bg-[url('../images/bg-body-2.png')]">


<!-- leftbar-tab-menu -->
@include('layouts.partials.navbar')
