<x-app-layout>
	<!--Container-->
	<div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">

		<!--Card-->
		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

        <div class="category-filter">
            <div class="jumbotron text-center">
                <h1 class="text-black" style="font-size: 30px;"><strong>Laporan Keuangan</strong></h1>
            </div>

                <label for="tahun" class="font-bold">Tahun Laporan Keuangan</label>
                <br/>
                <select id="tahun" style="width:200px" >
                    @foreach ($years as $year)
                        @if ($year == $currentyear)
                            <option value="{{ $year }}" selected>{{ $year }}</option>
                        @else
                            <option value="{{ $year }}">{{ $year }}</option>
                        @endif
                    @endforeach
                </select>
                <br/><br/>
                <label for="bulan" class="font-bold">Bulan Laporan Keuangan</label>
                <br/>
                <select id="bulan" style="width:200px" >

                    @php
                        $options = array( 'Januari', 'Februari', 'Maret',
                         'April', 'Mei', 'Juni',
                         'Juli', 'Agustus', 'September',
                         'Oktober', 'November', 'Desember');

                        $output = '';
                        for( $i=0; $i<count($options); $i++ ) {
                          $output .= '<option value="' . $i+1 . '"'
                                     . ( $currentmonth-1 == $i ? 'selected="selected"' : '' ) . '>'
                                     . $options[$i]
                                     . '</option>';
                        }
                        echo $output;
                    @endphp
                </select>
                <br/><br/>
                <button onclick="updateDocument()" class="submit inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                    Lihat
                </button>
                <br/><br/>
                <div class="section" style="color:red">
                    * Dokumen PDF
                </div>

                <embed
                  id="embdedpdf"
                  src="../laporan-keuangan/{{ $defaultuuid }}#toolbar=0&navpanes=0&scrollbar=0"
                  width="100%" height="900" />

            </div>
		</div>
		<!--/Card-->
	</div>
	<!--/container-->

	<script>
        function select() {
            var month = document.getElementById("bulan");
            month.options["{{ $currentmonth-1 }}"].selected = true;
        }
        //window.onload = select;

        function updateDocument() {
            var month = document.getElementById("bulan");
            var year = document.getElementById("tahun");


            var embdedpdf = document.getElementById("embdedpdf");
            embdedpdf.setAttribute("src", "../laporan-keuangan/periode/" + year.value + "/" + month.value + "#toolbar=0&navpanes=0&scrollbar=0");
        }
	</script>
</x-app-layout>
