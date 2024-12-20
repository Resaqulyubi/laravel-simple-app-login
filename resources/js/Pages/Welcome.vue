<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});
</script>

<template>
    <Head title="Selamat Datang di Portal Akademik Islami" />
    <div class="bg-emerald-50 text-emerald-900">
        <div class="relative min-h-screen">
            <!-- Navigation -->
            <header class="bg-white shadow-sm">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                    <div class="flex justify-between items-center">
                        <!-- Logo and Title -->
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-emerald-600 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <span class="text-xl font-semibold text-emerald-900">Portal Akademik Islami</span>
                        </div>

                        <!-- Auth Navigation -->
                        <nav v-if="canLogin" class="flex items-center space-x-4">
                            <template v-if="$page.props.auth.user">
                                <Link
                                    :href="route('dashboard')"
                                    class="rounded-md px-4 py-2 bg-emerald-600 text-white hover:bg-emerald-700 transition-colors duration-200"
                                >
                                    Dashboard
                                </Link>
                            </template>
                            <template v-else>
                                <Link
                                    :href="route('login')"
                                    class="rounded-md px-4 py-2 text-emerald-600 hover:bg-emerald-50 transition-colors duration-200"
                                >
                                    Masuk
                                </Link>

                                <Link
                                    v-if="canRegister"
                                    :href="route('register')"
                                    class="rounded-md px-4 py-2 bg-emerald-600 text-white hover:bg-emerald-700 transition-colors duration-200"
                                >
                                    Daftar
                                </Link>
                            </template>
                        </nav>
                    </div>
                </div>
            </header>

            <!-- Main Content -->
            <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <!-- Hero Section -->
                <div class="text-center mb-16">
                    <h1 class="text-4xl font-bold text-emerald-900 mb-4">
                        Selamat Datang di Komunitas Akademik Islami Kami
                    </h1>
                    <p class="text-lg text-emerald-700 max-w-2xl mx-auto">
                        Memberdayakan siswa dengan ilmu dan hikmah melalui prinsip-prinsip Islam dan keunggulan akademik
                    </p>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                    <!-- Feature 1 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-emerald-900 mb-2">Studi Islam</h2>
                        <p class="text-emerald-600">
                            Pendidikan Islam komprehensif yang mengintegrasikan pengetahuan tradisional dengan metode pembelajaran modern
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-emerald-900 mb-2">Keunggulan Akademik</h2>
                        <p class="text-emerald-600">
                            Pendidikan berkualitas tinggi yang memenuhi standar akademik internasional
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <div class="w-12 h-12 bg-emerald-100 rounded-lg flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h2 class="text-xl font-semibold text-emerald-900 mb-2">Komunitas</h2>
                        <p class="text-emerald-600">
                            Lingkungan yang mendukung persaudaraan dan pertumbuhan akademik
                        </p>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="text-center bg-emerald-600 rounded-lg p-8 shadow-lg">
                    <h2 class="text-2xl font-bold text-white mb-4">Bergabunglah dengan Komunitas Akademik Kami</h2>
                    <p class="text-emerald-100 mb-6 max-w-2xl mx-auto">
                        Mulailah perjalanan ilmu dan pertumbuhan spiritual Anda bersama kami. Daftar sekarang untuk mengakses sumber belajar komprehensif dan bergabung dengan komunitas kami yang dinamis.
                    </p>
                    <div class="flex justify-center space-x-4">
                        <Link
                            v-if="canRegister && !$page.props.auth.user"
                            :href="route('register')"
                            class="rounded-md px-6 py-3 bg-white text-emerald-600 hover:bg-emerald-50 transition-colors duration-200 font-semibold"
                        >
                            Mulai Sekarang
                        </Link>
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="rounded-md px-6 py-3 bg-white text-emerald-600 hover:bg-emerald-50 transition-colors duration-200 font-semibold"
                        >
                            Ke Dashboard
                        </Link>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="bg-white border-t border-emerald-100 mt-16">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <p class="text-center text-emerald-600">
                        {{ new Date().getFullYear() }} Portal Akademik Islami. Hak Cipta Dilindungi.
                    </p>
                </div>
            </footer>
        </div>
    </div>
</template>
