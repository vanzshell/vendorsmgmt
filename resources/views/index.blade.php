<!DOCTYPE html>
<html>
    <head>
    </head>

    <body>
    <table>

        <tr>
            @foreach($vendors_documents as $document)
            <td> {{ $document->companyprofile }}</td>
            <td>{{ $document->lafs }}</td>
            <td>    {{ $document->iso }}</td>
            <td>{{ $document->gdp }}</td>
                <td>{{ $document->gmp }}</td>
                    <td>{{ $document->lto }}</td>
                        <td> {{ $document->pol }}</td>
                            <td>{{ $document->listofproducts }}</td>
                                <td> {{ $document->listofvendorssuppliers }}</td>
                                    <td>{{ $document->listofclients }}</td>
                                        <td> {{ $document->adr }}</td>
                                            <td> {{ $document->bir }}</td>
                                                <td> {{ $document->sec }}</td>
                                                    <td>{{ $document->mayorspermit }}</td>
            <td><a href="{{ route('documents.edit', $document) }}"> Edit </a> </td>
            <td><form method="post" action="{{route('documents.destroy', $document->id)}}">
                @csrf
                @method('delete')
                <button type="submit">Delete</button></form></td>
            @endforeach
        </tr>
        </table>


    </body>
</html>
