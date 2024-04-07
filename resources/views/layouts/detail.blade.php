<x-gems-layout>
    <x-slot name='title'>
        Chi tiết
    </x-slot>


<style>
.info
{
display:grid;
grid-template-columns:repeat(2,30% 70%);
}
</style>
<h4>{{$data->tieu_de}}</h4>
<div class='info'>
<div>
<img src="{{asset('images/'.$data->file_anh_bia)}}" width="200px" height="200px">
</div>
</div>
<div class='row'>
<div class='col-sm-12'>
<b>Mô tả:</b><br>
{{$data->mo_ta}}
</div>
</div>
</x-gems-layout>