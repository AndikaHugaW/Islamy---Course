<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<x-navbar />
<body>
    <div class="container mx-auto mt-10">
        <table class="min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul Materi</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Pemateri</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Link Youtube</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Materi</th>
                    <th class="text-center px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($courses as $course)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $course->judul_course }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $course->nama_pemateri }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $course->link_course }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $course->text_materi }}</td>
                    <td class="text-center">
                        <form action="{{ route('hapus', $course->id_course) }}" method="POST"">
                            @csrf
                            @method('DELETE')
                            <button class="inline-block rounded bg-red-700 px-8 py-3 text-sm font-medium text-white transition hover:bg-yellow-600 hover:shadow-xl focus:outline-none">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
