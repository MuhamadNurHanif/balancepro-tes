@extends('dashboard')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body class="bg-gray-50">
        <div class="flex h-screen">
            <!-- Main Content -->
            <div class="flex-1 flex flex-col overflow-hidden">
                <!-- Main content area -->
                <main class="flex-1 overflow-y-auto p-6 bg-gray-50">
                    <div class="max-w-6xl mx-auto">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold text-gray-700">Dokumen PDF</h2>
                            <a href="https://mozilla.github.io/pdf.js/web/compressed.tracemonkey-pldi-09.pdf" download
                                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">
                                Download PDF
                            </a>
                        </div>
                        <!-- PDF Viewer -->
                        <div class="bg-white rounded-2xl shadow-md overflow-hidden border border-gray-200">
                            <iframe src="https://mozilla.github.io/pdf.js/web/compressed.tracemonkey-pldi-09.pdf"
                                class="w-full h-[800px] rounded-b-lg" frameborder="0">
                            </iframe>
                        </div>
                    </div>
                </main>

            </div>
        </div>

        <script>
            // Adjust PDF viewer height on resize
            function adjustPdfHeight() {
                const pdfContainer = document.querySelector('.pdf-container');
                const windowHeight = window.innerHeight;
                const headerHeight = document.querySelector('header').offsetHeight;
                const infoHeight = document.querySelector('.bg-white.rounded-lg.shadow-sm').offsetHeight;
                const actionsHeight = 100; // Approximate height of actions section

                const calculatedHeight = windowHeight - headerHeight - infoHeight - actionsHeight - 100; // Additional padding
                pdfContainer.style.height = `${Math.max(calculatedHeight, 400)}px`;
            }

            window.addEventListener('resize', adjustPdfHeight);
            window.addEventListener('load', adjustPdfHeight);
        </script>
    </body>

    </html>
@endsection
