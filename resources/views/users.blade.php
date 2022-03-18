<table>
<tr>
<td>Screen name</td>
<td>Screen Description</td>
<td>Screen link</td>
</tr>
@foreach($collection as $item)
<tr>
<td>{{$item['ROLE_NAME']}}</td>
<td>{{$item['ROLE_DESCRIPTION']}}</td>
<td>{{$item['AUTH_ID']}}</td>

</tr>
@endforeach
</table>