<!DOCTYPE html>
<html>
    <head>
    </head>

    <body class="antialiased">
        <FORM METHOD=POST action="{{route('documents.store')}}">
        @csrf
            <label>COMPANY PROFILE </label>
            <input type="text" class="form-control" name="companyprofile"><br>

            <br><label>Latest Audited Financial Statement or Clearance from BIR, Articles of Incorporation </label>
            <input type="text" class="form-control" name="lafs"><br>

            <br><label>International Standard Organization (ISO) Certification</label>
            <input type="text" class="form-control" name="iso"><br>

            <br><label>Good Distribution Practice Certification (GDP)</label>
            <input type="text" class="form-control" name="gdp"><br>

            <br><label>Good Manufacturing Practice Certification (GDP)</label>
            <input type="text" class="form-control" name="gmp"><br>
            <br><label>License to Operate (LTO)</label>
            <input type="text" class="form-control" name="lto"><br>

            <br><label>Proof of Lease for a Warehouse</label>
            <input type="text" class="form-control" name="pol"><br>
            <br><label>List of Products, Brochures, Pricelists</label>
            <input type="text" class="form-control" name="listofproducts"><br>

            <br><label>List of Vendor's Suppliers</label>
            <input type="text" class="form-control" name="listofvendorssuppliers"><br>
            <br><label>List of Clients</label>
            <input type="text" class="form-control" name="listofclients"><br>

            <br><label>Existing Adverse Drug Reaction (ADR) Reprot (if any)</label>
            <input type="text" class="form-control" name="adr"><br>
            <br><label>BIR / VAT Registration</label>
            <input type="text" class="form-control" name="bir"><br>
            <br><label>SEC / DTI</label>
            <input type="text" class="form-control" name="sec"><br>
            <br><label>Mayor's Permit</label>
            <input type="text" class="form-control" name="mayorspermit"><br>
            <button type="submit" class="btn btn-primary">
                                   Submit
                                </button>

             </FORM>
    </body>
</html>
