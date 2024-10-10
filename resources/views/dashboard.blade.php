<x-app-layout>
    <div class="container-fluid"> <!-- Adjust padding for the sidebar width -->
        <div class="mx-5 px-5 row">
            <div class="col-lg-8 col-md-12">
                <h1 class="mb-3">Responsive Heading</h1>
                <p>This is a responsive paragraph. On larger screens, it will take up 8 columns, and on smaller screens, it will take up the full width (12 columns).</p>
            </div>
            <div class="col-lg-4 col-md-12">
                <h2 class="mb-3">Sidebar Content</h2>
                <p>This section will take up 4 columns on large screens and the full width on small screens.</p>
            </div>
        </div>

        <div class="mx-5 px-5 row mt-5">
            <div class="col-12">
                <h3>Full-width Section</h3>
                <p>This section will always take up the full width of the screen.</p>
            </div>
        </div>
    </div>
</x-app-layout>
