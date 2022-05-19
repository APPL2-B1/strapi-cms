module.exports = ({ env }) => ({
  connection: {
    client: 'mysql',
    connection: {
      host: env('DATABASE_HOST', '127.0.0.1'),
      port: env.int('DATABASE_PORT', 3306),
      database: env('DATABASE_NAME', 'APPL2-B1'),
      user: env('DATABASE_USERNAME', 'APPL2-B1'),
      password: env('DATABASE_PASSWORD', 'APPL2-B1'),
      ssl: env.bool('DATABASE_SSL', false),
    },
  },
});
