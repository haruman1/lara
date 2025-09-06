@extends('errors::layout')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Halaman tidak ditemukan, silakan periksa kembali URL yang Anda masukkan.'))
@section('url', 'javascript:history.back()')
