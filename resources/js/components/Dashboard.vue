<template>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-bold mb-4">Dashboard</h2>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Statistics Cards -->
                        <div class="bg-indigo-100 p-4 rounded-lg">
                            <h3 class="text-lg font-semibold text-indigo-800">Total Students</h3>
                            <p class="text-3xl font-bold text-indigo-600">{{ stats.totalStudents }}</p>
                        </div>
                        
                        <div class="bg-green-100 p-4 rounded-lg">
                            <h3 class="text-lg font-semibold text-green-800">Total Courses</h3>
                            <p class="text-3xl font-bold text-green-600">{{ stats.totalCourses }}</p>
                        </div>
                        
                        <div class="bg-purple-100 p-4 rounded-lg">
                            <h3 class="text-lg font-semibold text-purple-800">Active Classes</h3>
                            <p class="text-3xl font-bold text-purple-600">{{ stats.activeClasses }}</p>
                        </div>
                    </div>

                    <!-- Recent Activity -->
                    <div class="mt-8">
                        <h3 class="text-xl font-semibold mb-4">Recent Activity</h3>
                        <div class="space-y-4">
                            <div v-for="activity in recentActivities" :key="activity.id"
                                class="p-4 border rounded-lg hover:bg-gray-50">
                                <p class="font-medium">{{ activity.description }}</p>
                                <p class="text-sm text-gray-500">{{ activity.timestamp }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const stats = ref({
    totalStudents: 0,
    totalCourses: 0,
    activeClasses: 0
});

const recentActivities = ref([]);

const fetchDashboardData = async () => {
    try {
        const response = await axios.get('/api/dashboard');
        stats.value = response.data.stats;
        recentActivities.value = response.data.recentActivities;
    } catch (error) {
        console.error('Failed to fetch dashboard data:', error);
    }
};

onMounted(() => {
    fetchDashboardData();
});
</script>
