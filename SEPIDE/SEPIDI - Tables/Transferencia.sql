USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Transferencia]    Script Date: 17/05/2017 02:03:50 p. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Transferencia](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nombre_transferencia] [varchar](150) NULL,
	[tipo] [varchar](100) NULL,
	[licencia] [varchar](100) NULL,
	[estatus] [varchar](5) NULL,
	[fecha_inicio] [date] NULL,
	[fecha_termino] [date] NULL,
	[receptor] [varchar](150) NULL,
	[monto] [float] NULL,
	[creador_id] [int] NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


