USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Docencia_invitado]    Script Date: 01/06/2017 09:39:00 a. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Docencia_invitado](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[docencia_id] [int] NULL,
	[tipo] [varchar](150) NULL,
	[nombre_escuela] [varchar](150) NULL,
	[created_at] [datetime] NULL,
	[updated_at] [datetime] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


