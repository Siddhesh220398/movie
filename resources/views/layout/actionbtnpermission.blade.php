<?php
$edit = route($route.'.edit', ['id' => $id]);
?>
<a style="background: transparent;" href="{{$edit}}"  title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">
    <i style="color: green;" class="la la-edit"></i>
</a>


@if(Auth::user()->role == 1)
<button style="background: transparent;" title="Delete" data-id="{{$id }}" class="btn btn-sm btn-clean btn-icon btn-icon-md delete-record">
    <i style="color: red;" class="la la-trash">
    </i>
</button>
@endif
@if($route === 'lead')
@if(Auth::user()->role == 1 || Auth::user()->role == 2 || Auth::user()->role == 4 || Auth::user()->role == 7)
<a href="{{route('quot.index',$id)}}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Quotation"><i class="fa fa-receipt" style="color:black;font-weight:bold"></i></a>
<a href="{{route('chalans.index',$id)}}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="Chalan"><i class="fa fa-check-circle" style="color:blue;font-weight:bold"></i></a>
@endif
@endif
@if($route === 'quot')
@if(Auth::user()->role == 1 || Auth::user()->role == 2 || Auth::user()->role == 4 || Auth::user()->role == 7)
<a href="{{route('isocs.create',$id)}}" class="btn btn-sm btn-clean btn-icon btn-icon-md" title="ISOC"><i class="fa fa-info-circle" style="color:black;font-weight:bold"></i></a>
@endif
@endif

@if($route === 'lead')
<?php
$show = route($route.'.show', ['id' => $id]);
?>

<a style="background: transparent;" href="{{$show}}"  title="Show details" class="btn btn-sm btn-clean btn-icon btn-icon-md">
    <i style="color: green;" class="la la-eye"></i>
</a>
@endif

@if($route === 'complain')
<?php
$show = route($route.'.show', ['id' => $id]);
?>
<a style="background: transparent;" href="{{$show}}"  title="Show details" class="btn btn-sm btn-clean btn-icon btn-icon-md">
    <i style="color: green;" class="la la-eye"></i>
</a>
@endif
@if($route === 'leave')
<?php
$show = route($route.'.show', ['id' => $id]);
?>
<a style="background: transparent;" href="{{$show}}"  title="Show details" class="btn btn-sm btn-clean btn-icon btn-icon-md">
    <i style="color: green;" class="la la-eye"></i>
</a>
@endif
@if($route === 'expense')
<?php
$show = route($route.'.show', ['id' => $id]);
?>
<a style="background: transparent;" href="{{$show}}"  title="Show details" class="btn btn-sm btn-clean btn-icon btn-icon-md">
    <i style="color: green;" class="la la-eye"></i>
</a>
@endif
@if($route === 'leave' || $route === 'expense' || $route === 'complain' || $route === 'quot' || $route === 'chalans' || $route === 'isocs')
@php $pdf = route($route.'.pdf');
if($route === 'quot')
{
    $name = App\Models\QuatationParent::where('id',$id)->value('to');
    $invoiceno = App\Models\QuatationParent::where('id',$id)->value('invoiceno');

}
else
{
    $name = '';
    $invoiceno = '';
}
@endphp
<button style="background: transparent;" title="PDF" onclick="getpdf('{{$id}}','{{$name}}','{{$invoiceno}}')" id="pdf_{{$id}}" class="btn btn-sm btn-clean btn-icon btn-icon-md pdf">
    <i style="color: #0932A2;" class="fas fa-print"></i>
</button>
@endif

<script type="text/javascript">
    function editmodal(id,url,title,url)
    {
        $('#edit_modal').modal('show');
        $('#edit_id').val('');
        $('#edit_id').val(id);
        $('#edit_title').val('');
        $('#edit_title').val(title);
        $('#edit_url').val("");
        $('#edit_url').val(url);
        $('#edit_form').attr('action','');
        $('#edit_form').attr('action',url);
    }

    @if($route === 'leave' || $route === 'expense' || $route === 'complain' || $route === 'quot' || $route === 'chalans' || $route === 'isocs')
    function getpdf(id,name,invoiceno)
    {
        var parent = $('#pdf_'+id);

        parent.attr('disabled',true);

        parent.html('<i class="fa fa-spinner fa-spin"></i>');

        $.ajax({
            type: "POST",
            url: "{{ $pdf }}",
            data: {
                '_token': $('input[name="_token"]').val(),
                'id': id
            },
            xhrFields: {
                responseType: 'blob'
            },
            success: function(blob) {
                parent.attr('disabled',false);

                parent.html('<i style="color: #0932A2;" class="fas fa-print"></i >');

                var link=document.createElement('a');
                link.href=window.URL.createObjectURL(blob);
                @if($route === 'quot')
                link.download= name+'_'+invoiceno+'_{{ $route }}.pdf';
                @else
                link.download= name+'{{ $route }}.pdf';
                @endif
                link.click();
            }
        });
    }
    @endif
</script>
