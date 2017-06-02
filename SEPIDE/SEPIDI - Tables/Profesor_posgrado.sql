USE [SEPIDI]
GO

/****** Object:  Table [dbo].[Profesor_posgrado]    Script Date: 02/06/2017 01:21:25 p. m. ******/
SET ANSI_NULLS ON
GO

SET QUOTED_IDENTIFIER ON
GO

SET ANSI_PADDING ON
GO

CREATE TABLE [dbo].[Profesor_posgrado](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[nombre_posgrado] [varchar](50) NULL,
	[created_at] [datetime] NULL,
	[updated_at] [date] NULL
) ON [PRIMARY]

GO

SET ANSI_PADDING OFF
GO


