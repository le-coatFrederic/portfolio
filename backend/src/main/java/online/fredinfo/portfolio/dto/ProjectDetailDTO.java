package online.fredinfo.portfolio.dto;

import java.time.LocalDate;
import java.util.Set;

import online.fredinfo.portfolio.models.ProjectStatus;

public record ProjectDetailDTO(
    Long id,
    String name,
    String description,
    String url,
    String github,
    ProjectStatus status,
    LocalDate startDate,
    LocalDate endDate,
    Set<TechDetailDTO> techs,
    Set<SkillDetailDTO> skills,
    Set<ImageDetailDTO> images
) {} 