// <template>
//   <app-layout>
//     <template #header>
//       <h2 class="text-xl font-semibold leading-tight text-gray-800">
//         Data Project
//       </h2>
//     </template>

//     <div class="py-12">
//       <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
//         <div class="mb-4 max-w-xs">
//           <input type="search" v-model="params.search" aria-label="Search" placeholder="Search..." class="block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"/>
//         </div>

//         <div class="overflow-hidden bg-white shadow-md sm:rounded-lg">
//           <div class="flex flex-col">
//             <div class="overflow-x-auto -my-2 sm:-mx-6 lg:-mx-8">
//               <div class="inline-block py-2 min-w-full align-middle sm:px-6 lg:px-8">
//                 <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">

//                   <table class="min-w-full divide-y divide-gray-200 table-fixed">
//                     <thead class="bg-indigo-500">
//                     <tr>
//                       <th scope="col" class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left text-white uppercase">
//                         Project Name
//                       </th>
//                       <th scope="col" class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left text-white uppercase">
//                         Short Name
//                       </th>
//                         <th scope="col" class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left text-white uppercase">
//                         Starting Date
//                       </th>
//                       <th scope="col" class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left text-white uppercase">
//                         Year Start
//                       </th>
//                       <th scope="col" class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left text-white uppercase">
//                         Year End
//                       </th>
//                         <th scope="col" class="py-3 px-6 w-3/12 text-xs font-semibold tracking-wider text-left text-white uppercase">
//                         Team name
//                       </th>
//                     </tr>
//                     </thead>

//                     <tbody class="bg-white divide-y divide-gray-200">
//                     <tr v-for="(project) in projects.data" :key="project.id">

//                       <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">
//                         {{ project.name }}
//                       </td>
//                       <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">
//                         {{ project.shortname }}
//                       </td>
//                       <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">
//                         {{ project.startingdate }}
//                       </td>
//                       <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">
//                         {{ project.yearstart }}
//                       </td>
//                       <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap">
//                         {{ project.yearend }}
//                       </td>
//                     </tr>
//                     </tbody>
//                   </table>
//                 </div>
//               </div>
//             </div>
//           </div>
//         </div>

//         <pagination class="mt-10" :links="projects.links"/>
//       </div>
//     </div>
//   </app-layout>
// </template>

// <script>
// import AppLayout from '@/Layouts/AppLayout';
// import Pagination from '../Jetstream/Pagination';
// import { pickBy, throttle } from 'lodash';

// export default {
//   components: {
//     AppLayout,
//     Pagination,
//   },
//   props: {
//     projects: Object,
//     filters: Object,
//   },
//   data() {
//     return {
//       params: {
//         search: this.filters.search,
//         field: this.filters.field,
//         direction: this.filters.direction,
//       },
//     };
//   },
//   methods: {
//     sort(field) {
//       this.params.field = field;
//       this.params.direction = this.params.direction === 'asc' ? 'desc' : 'asc';
//     },
//   },
//   watch: {
//     params: {
//       handler: throttle(function () {
//         let params = pickBy(this.params);

//         this.$inertia.get(this.route('project'), params, { replace: true, preserveState: true });
//       }, 150),
//       deep: true,
//     },
//   },
// };
// </script>
