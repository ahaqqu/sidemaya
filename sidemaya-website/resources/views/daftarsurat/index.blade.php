<x-app-layout>
	<!--Container-->
	<div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">

		<!--Card-->
		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">

        <div class="category-filter">
              <select id="categoryFilter" class="form-control">
                <option value="">Semua</option>
                <option value="Proses">Proses</option>
                <option value="Selesai">Selesai</option>
                <option value="Batal">Batal</option>
              </select>
            </div>

			<table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">ID Surat</th>
						<th data-priority="2">Jenis Surat</th>
						<th data-priority="3">Nomor Surat</th>
						<th data-priority="4">Waktu Mohon</th>
						<th data-priority="5">Status</th>
						<th data-priority="6"></th>
					</tr>
				</thead>
				<tbody>
                    @foreach ($documents as $document)
                        <tr>
                            <td>{{ $document->id }}</td>
                            <td>{{ $document->category }}</td>
                            <td>{{ $document->identifier }}</td>
                            <td>{{ $document->created_at }}</td>
                            <td>{{ $document->status }}</td>
                            <td>
                            @php
                                if($document->status === "Selesai") {
                                    echo <<<EOL
                                       <button onclick="location.href='../documents/final/$document->uuid'" type="button" class="underline rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                            Unduh
                                        </button>
                                    EOL;
                                }
                            @endphp
                            </td>
                        </tr>
                    @endforeach
				</tbody>

			</table>


		</div>
		<!--/Card-->


	</div>
	<!--/container-->





	<!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {

			var table = $('#example').DataTable({
					responsive: true,
					order: [
                        [0, 'desc']
                    ],
                    initComplete: function () {
                            $(".dataTables_filter").append($("#categoryFilter"));

                            var categoryIndex = 4;
                              $("#filterTable th").each(function (i) {
                                if ($($(this)).html() == "Category") {
                                  categoryIndex = i; return false;
                                }
                              });

                              //Use the built in datatables API to filter the existing rows by the Category column
                              $.fn.dataTable.ext.search.push(
                                function (settings, data, dataIndex) {
                                  var selectedItem = $('#categoryFilter').val()
                                  var category = data[categoryIndex];
                                  if (selectedItem === "" || category.includes(selectedItem)) {
                                    return true;
                                  }
                                  return false;
                                }
                              );

                              //Set the change event for the Category Filter dropdown to redraw the datatable each time
                              //a user selects a new filter.
                              $("#categoryFilter").change(function (e) {
                                table.draw();
                              });

                             setTimeout(function(){
                              $("th[data-priority='6'").removeClass("sorting");
                             }, 100);

                        }
				})
				.columns.adjust()
				.responsive.recalc();


		});
	</script>

</x-app-layout>
