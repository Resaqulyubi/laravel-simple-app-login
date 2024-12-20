<template>
    <div class="min-h-screen bg-gray-100">
        <nav class="bg-white border-b border-gray-100">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <h1 class="text-xl font-bold">Academic App</h1>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <router-link v-if="!isLoggedIn" to="/login" class="text-gray-600 hover:text-gray-900">Login</router-link>
                        <button v-else @click="logout" class="text-gray-600 hover:text-gray-900">Logout</button>
                    </div>
                </div>
            </div>
        </nav>

        <main>
            <router-view></router-view>
        </main>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { useRouter } from 'vue-router';

const router = useRouter();
const isLoggedIn = ref(false);

const logout = async () => {
    try {
        await axios.post('/logout');
        isLoggedIn.value = false;
        router.push('/login');
    } catch (error) {
        console.error('Logout failed:', error);
    }
};
</script>
