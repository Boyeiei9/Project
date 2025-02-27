<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-gray-900">Project Manag</h1>
                <p class="mt-2 text-lg text-gray-600">ยินดีต้อนรับ, {{ Auth::user()->name }}</p>
            </div>

            <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <a href="{{ route('projects.index') }}"
                        class="block p-6 text-center hover:bg-blue-600 transition duration-300 ease-in-out rounded-lg project-link">
                        <h3 class="text-xl font-semibold text-blue-600 mb-2">Manage Projects</h3>
                        <p class="text-gray-500">Manage and oversee all projects</p>
                    </a>
                </div>
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <a href="{{ route('users.index') }}"
                        class="block p-6 text-center hover:bg-gray-600 transition duration-300 ease-in-out rounded-lg">
                        <h3 class="text-xl font-semibold text-gray-600 mb-2">Manage Users</h3>
                        <p class="text-gray-500">View and manage user accounts</p>
                    </a>
                </div>
            </div>


        </div>
    </x-slot>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const projectLink = document.querySelector(".project-link");

            projectLink.addEventListener("click", function(event) {
                let userRole = "{{ Auth::user()->role }}"; // ดึง Role จาก Laravel Blade

                if (userRole !== "admin") {
                    event.preventDefault(); // ป้องกันการเปลี่ยนหน้า
                    alert("คุณไม่ใช่ Admin! ไม่สามารถเข้าถึง Projects ได้");
                }
            });
        });
    </script>
</x-app-layout>