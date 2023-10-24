# Crud de Productos con Categorías
### Versiones
- PHP: 8.0.2
- Laravel: 9.19
### Estructura
- Modelos: Utilizando la librería [krlove/eloquent-model-generator](https://github.com/krlove/eloquent-model-generator) se generaron los modelos en base a las tablas.
- Interfaces y Repositorios: Para reducir la carga de código en los controladores y definir e implementar los métodos propios de cada entidad en los repositorios.
  > EssentialRepository: Repository genérico para transferir implementaciones de métodos genéricos propios del CRUD en cualquier otro repositorio de cualquier interfaz.
- Controllers: Inyección de los repositorios y uso de sus métodos para *ProductController* y *CategoryController*.
  > RepositoryServiceProvider: Provider para hacer el bind de los repositorios y permitir la inyección de dependencias en los controladores.

##### Desarrollador: Sebastián Rodríguez Ventura